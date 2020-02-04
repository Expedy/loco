<?php

namespace Expedy\Loco\Models;

class GpxFile
{
	/**
	 * A list of waypoints.
     * 
	 * @var Point[]
	 */
	public $waypoints;

	/**
	 * A list of routes.
     * 
	 * @var Route[]
	 */
	public $routes;

	/**
	 * A list of tracks.
     * 
	 * @var Track[]
	 */
	public $tracks;

	/**
	 * Metadata about the file.
	 * The original GPX 1.1 attribute.
     * 
	 * @var Metadata|null
	 */
	public $metadata;

	/**
	 * Creator of GPX file.
     * 
	 * @var string|null
	 */
	public $creator;

	/**
	 * GpxFile constructor.
	 */
	public function __construct()
	{
		$this->waypoints = [];
		$this->routes = [];
		$this->tracks = [];
		$this->metadata = null;
		$this->creator = null;
	}
}