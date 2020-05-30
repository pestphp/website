<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_layouts.headers')
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-cool-gray-100 text-cool-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow-sm bg-white h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3" src="/assets/img/small-logo.png" alt="{{ $page->siteName }} logo" />
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

    </body>
</html>
