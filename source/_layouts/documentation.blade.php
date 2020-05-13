@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="relative DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
            @yield('content')
            <div class="absolute top-0 right-0 h-8 w-100 pt-3">
                <a href="https://github.com/pestphp/website/edit/master/source{{ $page->getPath() }}.md">Edit this page →</a>
            </div>
        </div>


    </div>
</section>
@endsection
