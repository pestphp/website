@extends('_layouts.master')

@section('body')
<div class="flex flex-col items-center mt-32 text-gray-700">
    <h1 class="text-6xl font-light leading-none mb-2">404</h1>

    <h2 class="text-2xl lg:text-3xl font-sans">Sorry! This page doesn't exist 😔</h2>

    <hr class="block max-w-lg mx-auto my-8 px-10 border">

    <p class="text-xl">
        Let's go <a href="{{ $page->baseUrl }}">Home</a>
    </p>
</div>
@endsection
