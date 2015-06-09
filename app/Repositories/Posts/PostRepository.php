<?php namespace App\Repositories\Posts;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Post;

class PostRepository implements PostRepositoryInterface {
	
	public function find( $id ) {
		return Post::findOrFail( $id );
	}

	public function all( $perPage = 10 ) {
		return Post::latest()->paginate( $perPage );
	}

	public function store( $data ) {
		return Post::create( $data );
	}

	public function update( $id, $data ) {
		$post = $this->find( $id );
		$post->fill( $data );
		$post->save();
	}

	public function delete( $id ) {
		$post = $this->find( $id );
		$post->delete();
	}
}