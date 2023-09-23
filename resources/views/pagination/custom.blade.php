<ul class="pagination inline-flex dark:text-white text-gray-800">
    {{-- Affiche le lien précédent --}}
    @if ($paginator->onFirstPage())
        <li class="page-item disabled mx-2">
            <span class="page-link" aria-hidden="true">&laquo;</span>
        </li>
    @else
        <li class="page-item mx-2">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev" aria-label="Previous">&laquo;</a>
        </li>
    @endif

    {{-- Boucle sur les pages --}}
    @foreach ($elements as $element)
        {{-- Gère les pages "numéros" --}}
        @if (is_string($element))
            <li class="page-item disabled mx-2">
                <span class="page-link">{{ $element }}</span>
            </li>
        @endif

        {{-- Gère les pages "lien" --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active mx-2">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item mx-2">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Affiche le lien suivant --}}
    @if ($paginator->hasMorePages())
        <li class="page-item mx-2">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="Next">&raquo;</a>
        </li>
    @else
        <li class="page-item disabled mx-2">
            <span class="page-link" aria-hidden="true">&raquo;</span>
        </li>
    @endif
</ul>
