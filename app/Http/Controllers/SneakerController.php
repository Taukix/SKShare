<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sneaker;

class SneakerController extends Controller
{
    public function all() {
        $sneakers = Sneaker::all();
        return view('sneakers.allsneakers', compact('sneakers'));
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
        $sneaker->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Cette ligne enregistre l'image dans le répertoire de stockage
            $sneaker->image = $imageName;
        }             

        $sneaker->save();

        return redirect()->route('sneakers')->with('success', 'Sneaker ajoutée avec succès!');
    }

    public function destroy(Sneaker $sneaker) {

        if (auth()->user()->id === $sneaker->user_id) {
            $sneaker->delete();

            return redirect()->route('sneakers')->with('success', 'Sneaker supprimée avec succès!');
        } else {
            return redirect()->route('sneakers')->with('error', 'Vous n\'êtes pas autorisé à supprimer cette sneaker.');
        }
    }

    public function show(Sneaker $sneaker) {
        return view('sneakers.show', compact('sneaker'));
    }

    public function like(Sneaker $sneaker) {
        $sneaker->increment('likes');
        return redirect()->route('sneakers.show', $sneaker->id);
    }

    public function dislike(Sneaker $sneaker) {
        $sneaker->increment('dislikes');
        return redirect()->route('sneakers.show', $sneaker->id);
    }

}
