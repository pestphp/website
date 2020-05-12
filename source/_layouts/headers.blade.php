<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

<meta property="og:site_name" content="{{ $page->siteName }}"/>
<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
<meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:image" content="https://pestphp.com/assets/img/og.png"/>
<meta property="og:type" content="website"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@enunomaduro">
<meta name="twitter:image:alt" content="{{ $page->siteName }}">

@if ($page->docsearchApiKey && $page->docsearchIndexName)
    <meta name="generator" content="tighten_jigsaw_doc">
@endif

<title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

<link rel="home" href="{{ $page->baseUrl }}">
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="icon" href="/favicon.ico">
<style type="text/css">
    .text-raleway {
        font-family: 'Raleway', sans-serif;
    }
    .bg-pest {
        background: url('/assets/img/pest.png');
    }
</style>

@stack('meta')

@if ($page->production)
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61404619-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-61404619-4');
    </script>
@endif
