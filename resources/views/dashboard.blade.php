<x-app-layout>
    <div class="w-75 py-12 mx-12">
        <div class="mx-auto sm:px-6 lg:px-8">

            <!-- Content Container -->
            <div class="w-full lg:w-3/4 mb-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Dashboard</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">Welcome back, {{ Auth::user()->name }}!</p>
                        </div>
                    </div>
                </div>
            <!-- End Content Container -->

            <div class="flex justify-between">

                <div class="lg:w-3/4" style="width: 37vw">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Vans intéressants</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">8</p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/4" style="width: 37vw; justify-self: end;">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <h1 class="text-xl font-bold">Vans loués</h1>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">7</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
