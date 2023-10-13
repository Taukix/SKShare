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
                                        <input type="text" name="name" id="name" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required maxlength="50">
                                    </div>
                                    <div class="mb-8">
                                        <label for="description" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Description</label>
                                        <textarea type="text" name="description" id="description" class="w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required maxlength="150"></textarea>
                                    </div>
                                    <div class="flex flex-row justify-between">
                                        <div class="mb-8">
                                            <label for="size" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Taille</label>
                                            <input type="number" name="size" id="size" class="text-center w-full text-gray-800 border-gray-300 dark:border-gray-600 focus:border-indigo-300 dark:focus:border-indigo-700 rounded-md shadow-sm" required>
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
                                    <img id="image-preview" src="#" alt="Aperçu de l'image" class="w-52 h-52 mb-8 hidden rounded" style="height: 25vh;">                       
                                    <div class="flex items-center justify-center w-full">
                                        <label for="image" class="flex flex-col items-center justify-center w-full h-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                                            </div>
                                            <input id="image" name="image" type="file" class="hidden" />
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="shadow-lg shadow-amber-100/50 bg-amber-100 text-black py-2 px-4 rounded-md hover:bg-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-200 focus:ring-opacity-50">Ajouter Sneaker</button>
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
