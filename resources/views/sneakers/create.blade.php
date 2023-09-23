<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une Sneaker
        </h2>
    </x-slot>

    <div class="mt-6">
        <div class="sm:px-6 lg:px-8">
            <!-- Content Container -->
            <div class="w-100 mb-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                        <!-- Formulaire d'ajout de Sneaker -->
                        <form method="POST" action="{{ route('sneakers.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Nom de la Sneaker</label>
                                <input type="text" name="name" id="name" class="w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Description</label>
                                <textarea type="text" name="description" id="description" class="w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required maxlength="500"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Image</label>
                                <input type="file" name="image" id="image" class="w-full border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                            </div>
                            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50">Ajouter Sneaker</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Content Container -->
        </div>
    </div>
</x-app-layout>
