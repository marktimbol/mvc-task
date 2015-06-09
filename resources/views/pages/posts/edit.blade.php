@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			<div class="row">
				<div class="col-md-6">
					<h1>Edit Post</h1>
				</div>

				<div class="col-md-6 text-right">
					{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy',$post->id]]) !!}
						{!! Form::hidden('id', $post->id) !!}
						{!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</div>
			</div>

			@include('messages.list')

			{!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update', $post->id], 'id' => 'postForm']) !!}
				
				{!! Form::hidden('id', $post->id) !!}
				
				@include('pages.posts._form', ['buttonText' => 'Update Post'])

			{!! Form::close() !!}



		</div>

	</div>
@endsection