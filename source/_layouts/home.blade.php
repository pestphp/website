<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_layouts.headers')

        @stack('meta')

        <script
            src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"
            crossorigin="anonymous" async></script>

        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@500&display=swap" rel="stylesheet">
        <style type="text/css">
            .text-raleway {
                font-family: 'Raleway', sans-serif;
            }
            .bg-pest {
                background: url('/assets/img/pest.png');
            }
        </style>

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <style>
            html {
                font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",
                Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji",
                "Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            }
        </style>
    </head>

    <body>
        @yield('body')
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
