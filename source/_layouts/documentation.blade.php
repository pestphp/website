@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container documentation max-w-8xl mx-auto px-6 md:pl-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="relative DocSearch-content mt-8 w-full lg:w-3/5 break-words pb-16 lg:ml-6">
            @yield('content')
            <div class="absolute top-0 right-0 h-8 w-100 pt-3 hidden md:block">
                <a href="https://github.com/pestphp/website/edit/master/source{{ $page->getPath() }}.{{ $page->getPath() == '/docs/team' ? "blade.php" : "md" }}">Edit this page →</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('meta')
@if ($page->docsearchApiKey && $page->docsearchIndexName)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
@endif

<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400;1,700;1,800&display=swap" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>
<script>
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.initHighlightingOnLoad();
    });
</script>
@endpush