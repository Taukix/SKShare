<x-app-layout>
    <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
        Ajouter une Sneaker
    </h2>

    <div class="mt-6">
        <div class="px-6 lg:px-8">
            <div class="w-100 mb-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                        <form method="POST" action="{{ route('sneakers.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-10">
                                <div>
                                    <div class="mb-8">
                                        <label for="name" class="block text-gray-700 dark:text-gray-400 text-sm font-medium mb-2">Nom de la Sneaker</label>
                                        <input type="text" name="name" id="name" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                                    </div>
                                    <div class="mb-8">
                                        <label for="description" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Description</label>
                                        <textarea type="text" name="description" id="description" class="w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required maxlength="500"></textarea>
                                    </div>
                                    <div class="flex flex-row justify-between">
                                        <div class="mb-8">
                                            <label for="size" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Taille</label>
                                            <input type="text" name="size" id="size" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                                        </div>
                                        <span class="text-4xl font-bold mx-4 mt-6 mb-8">-</span>
                                        <div class="mb-8">
                                            <label for="price" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Prix</label>
                                            <input type="number" name="price" id="price" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                                        </div>
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
                                <div class="grid grid-cols-1 justify-items-center h-full w-full">
                                    <img id="image-preview" src="#" alt="Aperçu de l'image" class="w-full mb-8 hidden rounded">
                                    <div class="mb-8">
                                        <label for="image" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Image</label>
                                        <input type="file" name="image" id="image" class="w-full border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
                                    </div>
                                </div>
                                <button type="submit" class="shadow-lg shadow-blue-500/50 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:ring-opacity-50">Ajouter Sneaker</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Content Container -->
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById("image").addEventListener("change", function() {
        const fileInput = this;
        const imgPreview = document.getElementById("image-preview");
        
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.style.display = "block"; // Afficher l'image
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>
