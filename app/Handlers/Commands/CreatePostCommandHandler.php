<?php namespace App\Handlers\Commands;

use App\Commands\CreatePostCommand;

use Illuminate\Queue\InteractsWithQueue;

use App\Repositories\Posts\PostRepositoryInterface;

class CreatePostCommandHandler {

	protected $post;

	/**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct( PostRepositoryInterface $post )
	{
		$this->post = $post;
	}

	/**
	 * Handle the command.
	 *
	 * @param  CreatePostCommand  $command
	 * @return void
	 */
	public function handle(CreatePostCommand $command)
	{
		$data = [
			'title' => $command->title,
			'body'	=> $command->body
		];

		$this->post->store( $data );

		//fire event here
	}

}
