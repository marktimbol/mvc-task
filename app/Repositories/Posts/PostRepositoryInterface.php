<?php namespace App\Repositories\Posts;

interface PostRepositoryInterface {
	
	public function find( $id );
	
	public function all( $perPage);

	public function store( $data );

	public function update( $id, $data );

	public function delete( $id );
}