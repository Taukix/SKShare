<x-app-layout>
    <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
        Sneaker {{ $sneaker->name }}
    </h2>

    <div class="container mx-auto w-100 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 inline-grid grid-cols-2 items-center text-gray-900 dark:text-gray-100 w-full">
                <div class="border-white border-2 w-full h-full bg-white flex items-center sm:rounded-lg">
                    <img src="{{ asset('storage/images/' . $sneaker->image) }}" alt="{{ $sneaker->name }}" class="w-full my-auto sm:rounded-lg">
                </div>
                <div class="flex flex-col justify-between justify-self-start w-full h-full sm:pl-6 lg:pl-8">
                    <div class="grid gap-4 w-full">
                        <h2 class="lg:text-2xl sm:text-xl italic font-semibold">Description</h2>
                        <p class="break-all lg:text-lg sm:text-sm text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->description }}</p>
                        <h2 class="lg:text-2xl sm:text-xl italic font-semibold">Date de création</h2>
                        <p class="lg:text-lg sm:text-sm text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->created_at->format('d/m/Y') }}</p>
                        <h2 class="lg:text-2xl sm:text-xl italic font-semibold">Prix</h2>
                        <p class="lg:text-lg sm:text-sm text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->price }} €</p>
                        <h2 class="lg:text-2xl sm:text-xl italic font-semibold">Taille</h2>
                        <p class="lg:text-lg sm:text-sm text-gray-600 dark:text-gray-400 mt-2">{{ $sneaker->size }}</p>
                    </div>
                    <div class="inline-flex items-center justify-between w-full mt-6">
                        <div class="flex justify-center items-center">
                            <form method="POST" action="{{ route('sneakers.like', $sneaker->id) }}">
                                @csrf
                                <button type="submit" class="text-white py-2 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                    </svg>
                                </button>
                            </form>
                            <span class="text-xl font-semibold mx-4">{{ $sneaker->likes }}</span>
                            <span class="text-xl font-semibold mx-4">{{ $sneaker->dislikes }}</span>
                            <form method="POST" action="{{ route('sneakers.dislike', $sneaker->id) }}">
                                @csrf
                                <button type="submit" class="text-white py-2 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @if(auth()->user() && auth()->user()->id === $sneaker->user_id)
                            <form method="POST" action="{{ route('sneakers.destroy', $sneaker->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="shadow-lg shadow-red-500/50 text-red-600 hover:text-red-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-8 mb-6">
        <a href="{{ route('sneakers') }}" class="shadow-lg shadow-blue-500/50 m-auto mt-4 bg-blue-600 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded">
            Retour à la liste des sneakers
        </a>
    </div>
</x-app-layout>
