<x-app-layout>
    <h2 class="text-center mt-8 mb-8 font-semibold text-4xl text-gray-800 dark:text-white leading-tight">
        Toutes les Sneakers
    </h2>

    <div class="mt-6">
        <div class="sm:px-6 lg:px-8 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-6 p-6">
            @foreach($sneakers as $sneaker)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 text-center">
                <h3 class="lg:text-2xl sm:text-xl text-sm italic text-center font-semibold mb-6 h-1/6">{{ $sneaker->name }}</h3>
                <a href="{{ route('sneakers.show', $sneaker->id) }}"><img src="{{ asset('storage/images/' . $sneaker->image) }}" alt="{{ $sneaker->name }}" class="sm:rounded-lg w-full h-4/6"></a>
                <div class="flex flex-row justify-between mt-4 sm:flex hidden">
                    <div class="flex justify-center items-center lg:flex md:hidden">
                        <div class="like-button" data-sneaker-id="{{ $sneaker->id }}">
                            @if ($sneaker->likedByUsers->contains(auth()->user()))
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-amber-200 like-icon-active">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.960a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-amber-200 like-icon-inactive">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.960a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                            @endif
                        </div>
                        <span id="likes-count-{{ $sneaker->id }}" class="text-xl font-semibold mx-4 text-amber-200">{{ $sneaker->likes }}</span>
                        <span id="dislikes-count-{{ $sneaker->id }}" class="text-xl font-semibold mx-4 text-red-500">{{ $sneaker->dislikes }}</span>
                        <div class="dislike-button" data-sneaker-id="{{ $sneaker->id }}">
                            @if ($sneaker->dislikedByUsers->contains(auth()->user()))
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-500 like-icon-active">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.960a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-500 like-icon-inactive">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.960a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                </svg>
                            @endif
                        </div>
                    </div>
                    <div class="inline-flex items-center">
                        <span class="text-xl font-semibold mx-4">{{ $sneaker->size }}</span>
                        <span class="text-xl font-semibold mx-4">-</span>
                        <span class="text-xl font-semibold mx-4">{{ $sneaker->price }} €</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="mt-6 flex justify-center gap-6">
        {{ $sneakers->links('pagination.custom') }}
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.like-button').on('click', function(event) {
            var likeButton = $(this);
            var sneakerId = likeButton.data('sneaker-id');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: '/api/sneakers/' + sneakerId + '/like',
                data: {
                    _token: csrfToken,
                },
                success: function(data) {
                    if (data.success) {
                        console.log(data);
                        var likesCount = $('#likes-count-' + sneakerId);
                        if (likesCount.length) {
                            likesCount.text(data.likes);
                        }

                        var likeIcon = likeButton.find('svg');
                        if (likeIcon.hasClass('like-icon-active')) {
                            likeIcon.removeClass('like-icon-active').addClass('like-icon-inactive');
                        } else {
                            likeIcon.removeClass('like-icon-inactive').addClass('like-icon-active');
                        }
                    }
                },
            });

            event.preventDefault();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.dislike-button').on('click', function(event) {
            var dislikeButton = $(this);
            var sneakerId = dislikeButton.data('sneaker-id');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: '/api/sneakers/' + sneakerId + '/dislike',
                data: {
                    _token: csrfToken,
                },
                success: function(data) {
                    if (data.success) {
                        console.log(data);
                        var dislikesCount = $('#dislikes-count-' + sneakerId);
                        if (dislikesCount.length) {
                            dislikesCount.text(data.dislikes);
                        }

                        var dislikeIcon = dislikeButton.find('svg');
                        if (dislikeIcon.hasClass('like-icon-active')) {
                            dislikeIcon.removeClass('like-icon-active').addClass('like-icon-inactive');
                        } else {
                            dislikeIcon.removeClass('like-icon-inactive').addClass('like-icon-active');
                        }
                    }
                },
            });

            event.preventDefault();
        });
    });
</script>



