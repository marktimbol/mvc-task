<?php namespace App\Handlers\Commands;

use App\Commands\UpdatePostCommand;

use Illuminate\Queue\InteractsWithQueue;

use App\Repositories\Posts\PostRepositoryInterface;

class UpdatePostCommandHandler {

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
	public function handle(UpdatePostCommand $command)
	{
		$data = [
			'title' => $command->title,
			'body'	=> $command->body
		];

		$this->post->update( $command->id, $data );

		//fire event here
	}

}
