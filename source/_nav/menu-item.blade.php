@if ($url = is_string($item) ? $item : $item->url)
    <div class="mt-1">
        <a href="{{ $page->url($url) }}" class="{{ $page->isActive($url) ? 'bg-gray-100 text-gray-900' : '' }} mt-1 group flex items-center px-3 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
            <span class="truncate">
                {{ $label }}
            </span>
        </a>
    </div>
@else
    <div class="mt-6">
        <h3 class="px-3 text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">
          {{ $label }}
        </h3>
    </div>
@endif

@if (! is_string($item) && $item->children)
    @foreach ($item->children as $label => $item)
        @include('_nav.menu-item', ['item' => $item, 'level' => ++$level])
    @endforeach
@endif
