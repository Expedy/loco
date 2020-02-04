<?php

namespace Expedy\Loco\Models;

class Route extends Collection
{
	/**
	 * A list of route points.
	 * An original GPX 1.1 attribute.
	 * @var Point[]
	 */
	public $points;

	/**
	 * Route constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->points = [];
	}
}