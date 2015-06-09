@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1>{{ $post->title }}</h1>
			
			<small>{{ date('j F Y', strtotime($post->created_at)) }}</small>
			<hr />
			
			<p class="lead">{{ $post->body }}</p>

		</div>

		<div class="col-md-4">

		</div>

	</div>
@endsection