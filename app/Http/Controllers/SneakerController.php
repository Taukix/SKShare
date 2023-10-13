<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class SneakerController extends Controller
{
    public function all(Request $request) {
        $category = $request->input('category');
        $sneakers = Sneaker::query();
        if ($category) {
            $sneakers->where('category', $category);
        }
        $sneakers = $sneakers->paginate(10);
        return view('sneakers.allsneakers', ['sneakers' => $sneakers]);
    }

    public function create() {
        return view('sneakers.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sneaker = new Sneaker();
        $sneaker->name = $request->input('name');
        $sneaker->description = $request->input('description');
        $sneaker->size = $request->input('size');
        $sneaker->price = $request->input('price');
        $sneaker->category = $request->input('category');
        $sneaker->user_id = auth()->user()->id;
        

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $sneaker->image = $imageName;
        }             

        $sneaker->save();

        return redirect()->route('sneakers')->with('success', 'Sneaker ajoutée avec succès!');
    }

    public function destroy(Sneaker $sneaker) {
        $this->authorize('delete', $sneaker);

        if (auth()->user()->id === $sneaker->user_id) {
            Storage::delete('public/images/' . $sneaker->image);
            $sneaker->delete();

            return redirect()->route('sneakers')->with('success', 'Sneaker supprimée avec succès!');
        } else {
            return redirect()->route('sneakers')->with('error', 'Vous n\'êtes pas autorisé à supprimer cette sneaker.');
        }
    }

    public function edit(Sneaker $sneaker) {
        $this->authorize('update', $sneaker);
        return view('sneakers.edit', compact('sneaker'));
    }

    public function update(Request $request, Sneaker $sneaker) {
        $this->authorize('update', $sneaker);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sneaker->name = $request->input('name');
        $sneaker->description = $request->input('description');
        $sneaker->size = $request->input('size');
        $sneaker->price = $request->input('price');

        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $sneaker->image);
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $sneaker->image = $imageName;
        }             

        $sneaker->save();

        return redirect()->route('sneakers')->with('success', 'Sneaker modifiée avec succès!');
    }

    public function show(Sneaker $sneaker) {
        return view('sneakers.show', compact('sneaker'));
    }

    public function dashboard() {
        $userSneakers = auth()->user()->sneakers;
        return view('dashboard', compact('userSneakers'));
    }

    public function rankingLikes(Sneaker $sneaker) {
        $sneakers = DB::table('sneakers')
            ->orderBy('likes', 'desc')
            ->get();
        return view('sneakers.rankings.Likes', compact('sneakers'));
    }

    public function rankingUsers() {
        $users = User::with('sneakers')->get();
        $users = $users->sortByDesc(function ($user) {
            return $user->sneakers->count();
        });
        return view('sneakers.rankings.users', compact('users'));
    }
}
