<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use App\Repositories\Posts\PostRepositoryInterface;

use Laracasts\Flash\Flash;

use App\Commands\CreatePostCommand;
use App\Commands\UpdatePostCommand;
use App\Commands\DeletePostCommand;

class PostsController extends Controller {

	protected $post;

	public function __construct( PostRepositoryInterface $post ) {
		$this->post = $post;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->post->all(10);

		return view('pages.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( PostRequest $request )
	{
		$this->dispatchFrom( CreatePostCommand::class, $request );

		Flash::success('New post has been successfully published.');

		return redirect()->route('posts.index');		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->post->find($id);

		return view('pages.posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->post->find($id);

		return view('pages.posts.edit', compact('post'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PostRequest $request )
	{
		$this->dispatchFrom( UpdatePostCommand::class, $request );

		Flash::success('Post has been successfully updated.');

		return redirect()->route('posts.index');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$this->dispatchFrom( DeletePostCommand::class, $request );

		Flash::success('Post has been successfully deleted.');

		return redirect()->route('posts.index');
	}

}
