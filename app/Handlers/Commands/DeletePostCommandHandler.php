<?php namespace App\Handlers\Commands;

use App\Commands\DeletePostCommand;

use Illuminate\Queue\InteractsWithQueue;

use App\Repositories\Posts\PostRepositoryInterface;

class DeletePostCommandHandler {

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
	 * @param  DeletePostCommand  $command
	 * @return void
	 */
	public function handle(DeletePostCommand $command)
	{
		$this->post->delete( $command->id );
	}

}
