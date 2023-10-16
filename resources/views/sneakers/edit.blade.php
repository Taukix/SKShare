<x-app-layout>
    <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
        Modifier la Sneaker {{ $sneaker->name }}
    </h2>

    <div class="container mx-auto w-100 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <form method="POST" action="{{ route('sneakers.update', $sneaker->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="p-6 grid md:grid-cols-2 sm:grid-cols-1 items-center text-gray-900 dark:text-gray-100 w-full">
                    <div class="border-white border-2 w-full h-full flex items-center sm:rounded-lg" style="background: rgb(248,248,248)">
                        <img src="{{ asset('storage/images/' . $sneaker->image) }}" alt="{{ $sneaker->name }}" class="w-full my-auto sm:rounded-lg">
                    </div>
                    <div class="flex flex-col justify-between justify-self-start w-full h-full sm:pl-6 lg:pl-8">
                        <div class="grid gap-4 w-full">
                            <div class="lg:text-xl sm:text-lg italic font-semibold md:mt-0 mt-6">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name" value="{{ $sneaker->name }}" class="text-gray-500 w-full p-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="lg:text-xl sm:text-lg italic font-semibold">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="text-gray-500 w-full p-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 dark:focus:border-blue-500" required>{{ $sneaker->description }}</textarea>
                            </div>
                            <div class="lg:text-xl sm:text-lg italic font-semibold">
                                <label for="price">Prix (€)</label>
                                <input type="number" id="price" name="price" value="{{ $sneaker->price }}" class="text-gray-500 w-full p-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="lg:text-xl sm:text-lg italic font-semibold">
                                <label for="size">Taille</label>
                                <input type="text" id="size" name="size" value="{{ $sneaker->size }}" class="text-gray-500 w-full p-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <div class="lg:text-xl sm:text-lg italic font-semibold">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="text-gray-500 w-full p-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="lg:mb-8 mb-0">
                                <label for="category" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Catégorie</label>
                                <select name="category" id="category" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                                    <option value="Dunk">Dunk</option>
                                    <option value="Air Jordan Low">Air Jordan Low</option>
                                    <option value="Air Jordan High">Air Jordan High</option>
                                    <option value="Air Force">Air Force</option>
                                    <option value="Vans">Vans</option>
                                    <option value="Nike Cortez">Nike Cortez</option>
                                    <option value="New Balance">New Balance</option>
                                    <option value="Adidas">Adidas</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="text-center mt-8 mb-6">
                    <button type="submit" class="shadow-lg shadow-amber-500/50 bg-amber-50 hover:bg-amber-200 text-black font-semibold py-2 px-4 rounded">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="{{ route('sneakers.show', $sneaker->id) }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-white hover:fill-black w-6 h-6 ml-8 rounded-full hover:bg-amber-200 p-1 mt-8 mb-6 w-8 h-8">
            <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z" clip-rule="evenodd" />
        </svg>
    </a>
</x-app-layout>
