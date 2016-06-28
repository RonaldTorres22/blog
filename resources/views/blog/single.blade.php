@extends('main')
@section('title', "| $Post->title")


@section('content')

<div class="row">
	<div class = "col-md-8 col-md-offset-2">
		<h1>{{ $Post->title }}</h1>
		<p>{{ $Post->body }}</p>
	</div>
</div>

@endsection