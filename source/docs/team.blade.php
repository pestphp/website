---
title: "Team"
---
@extends('_layouts.documentation')

@section('content')

<h1>Meet the team</h1>

<blockquote>
	<p><strong>Hey!</strong> Want to be part of the team?
	<br>We have some open team positions <a href="#open-positions">take a look.</a></p>
</blockquote>

@foreach($page->team as $position => $team)
<div class="mt-20">
	<h3 class="text-2xl lg:text-3xl mb-1 ">{{ $position }}</h3>
	<p class="text-gray-700 text-lg mb-16">{{ $team->description }}</p>

	<div class="grid grid-cols-2 lg:grid-cols-3 gap-4 row-gap-16">
		@foreach($team->contributors as $contributor)
			<x-team-card :contributor="$contributor" :page="$page"></x-team-card>
		@endforeach
	</div>
</div>
@endforeach

<hr>

<div id="open-positions">
	<h3 class="text-2xl lg:text-3xl mb-1">Here are some open positions</h3>
	<p class="text-gray-700 text-lg mb-16">We will be happy to join us!</p>

	<ul class="list-inside text-lg">
		<li>Discord Moderator</li>
		<li>Documentation Moderator</li>
		<li>Tester</li>
		<li>Issue Triage</li>
	</ul>
</div>
@endsection
