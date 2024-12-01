{{-- resources/views/vendor/pagination/tailwind.blade.php --}}
<div class="inline-flex -space-x-px">
    @if ($paginator->onFirstPage())
        <span class="cursor-default inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md">
            {!! __('pagination.previous') !!}
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">
            {!! __('pagination.previous') !!}
        </a>
    @endif

    {{-- Pagination Links --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="cursor-default inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300">
                {{ $element }}
            </span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-300">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">
            {!! __('pagination.next') !!}
        </a>
    @else
        <span class="cursor-default inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md">
            {!! __('pagination.next') !!}
        </span>
    @endif
</div>
