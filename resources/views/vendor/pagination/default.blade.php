@if ($paginator->hasPages())
    <nav class="inline-flex space-x-2">
        {{-- First Page --}}
        @if ($paginator->onFirstPage())
            <span class="text-gray-500">1</span>
        @else
            <a href="{{ $paginator->url(1) }}" class="text-black">1</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="text-gray-500">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="text-black">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="text-gray-500">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Last Page --}}
        @if (!$paginator->onLastPage())
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="text-gray-500">{{ $paginator->lastPage() }}</a>
        @endif
    </nav>
@endif
