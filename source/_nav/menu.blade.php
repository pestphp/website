@php $level = $level ?? 0 @endphp

<nav class="lg:sticky lg:top-16">
  <div class="mt-8 lg:w-56 lg:pr-4 xl:pl-0">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
  </div>
</nav>
