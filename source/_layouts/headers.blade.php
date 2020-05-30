<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://code.jquery.com/">
@if($page->production)
<link rel="dns-prefetch" href="https://www.googletagmanager.com/">
<link rel="dns-prefetch" href="https://www.google-analytics.com">
@endif

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

<meta property="og:site_name" content="{{ $page->siteName }}"/>
<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
<meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:image" content="https://pestphp.com/assets/img/og.jpg"/>
<meta property="og:type" content="website"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:creator" content="@enunomaduro">
<meta name="twitter:image:alt" content="{{ $page->siteName }}">

@if ($page->docsearchApiKey && $page->docsearchIndexName)
    <meta name="generator" content="tighten_jigsaw_doc">
@endif

<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

@if($page->getPath() == "/")
<title>{{ $page->siteName }}</title>
@else
<title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
@endif

<link rel="home" href="{{ $page->baseUrl }}">

<link rel="icon" href="/favicon.ico">
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
