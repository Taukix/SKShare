<x-app-layout>
    <div class="sm:m-0 sm:mt-6 mt-0 w-full">
        <div class="lg:px-8 px-6">

            <div class="w-100 mb-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Tableau de bord</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">De retour, {{ Auth::user()->name }}!</p>
                        </div>
                    </div>
            </div>

            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">

                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Total de likes pour vos Sneakers</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">{{ auth()->user()->sneakers->sum('likes') }}</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Sneakers publiées</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">{{ auth()->user()->sneakers->count() }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
                Vos Sneakers
            </h2>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
                @foreach(auth()->user()->sneakers as $sneaker)
                    <a href="{{ route('sneakers.show', $sneaker->id) }}">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-full">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <img src="{{ asset('storage/images/' . $sneaker->image) }}" alt="{{ $sneaker->name }}" class="w-full h-52 rounded">
                                <h2 class="text-2xl italic font-semibold mt-4">{{ $sneaker->name }}</h2>
                                <p class="text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->created_at->format('d/m/Y') }}</p>
                                <div class="flex flex-roxs justify-between">
                                    <p class="text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->price }} €</p>
                                    <p class="text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->size }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
