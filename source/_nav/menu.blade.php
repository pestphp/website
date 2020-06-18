@php $level = $level ?? 0 @endphp

<nav class="lg:sticky lg:w-64 overflow-y-auto h-screen-24 lg:top-16">
  <div class="mt-8 lg:pr-4 xl:pl-0">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
  </div>
</nav>
