@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<h1>Add New Post</h1>

			@include('messages.list')

			{!! Form::open(['route' => 'posts.store', 'id' => 'postForm']) !!}

				@include('pages.posts._form', ['buttonText' => 'Publish'])

			{!! Form::close() !!}

		</div>


	</div>
@endsection