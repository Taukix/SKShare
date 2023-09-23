<x-app-layout>
    <div class="mt-6">
        <div class="sm:px-6 lg:px-8">

            <div class="w-100 mb-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Tableau de bord</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">De retour, {{ Auth::user()->name }}!</p>
                        </div>
                    </div>
            </div>

            <div class="grid grid-cols-2 gap-6">

                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Sneakers aimées</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">8</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Sneakers publiées</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">7</p>
                        </div>
                    </div>
                </div>

            </div>

            <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
                Vos Sneakers
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach(auth()->user()->sneakers as $sneaker)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
