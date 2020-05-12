@php $level = $level ?? 0 @endphp

<nav>
  <div class="mt-8">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
  </div>
</nav>
