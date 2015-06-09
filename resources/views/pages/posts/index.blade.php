@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<div class="row">
				<div class="col-md-6">
					<h1>Posts</h1>
				</div>

				<div class="col-md-6 text-right">
					<a href="{{ route('posts.create')}}" class="btn btn-primary btn-sm add-post">Add New</a>
				</div>
			</div>

			

			@include('messages.list')

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Title</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach( $posts as $post )
					<tr>
						<td><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
						<td><a href="{{ route('posts.show', $post->id) }}">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>

			{!! $posts->render() !!}

		</div>

		<div class="col-md-4">

		</div>

	</div>
@endsection