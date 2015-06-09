<?php namespace App\Commands;

use App\Commands\Command;

class CreatePostCommand extends Command {

	public $title;
	public $body;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct( $title, $body )
	{
		$this->title = $title;
		$this->body = $body;
	}

}
