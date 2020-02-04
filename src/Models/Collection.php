<?php

namespace Expedy\Loco\Models;

abstract class Collection
{
	/**
	 * GPS name of route / track.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var string|null
	 */
	public $name;

	/**
	 * GPS comment for route.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var string|null
	 */
	public $comment;

	/**
	 * Text description of route/track for user. Not sent to GPS.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var string|null
	 */
	public $description;

	/**
	 * Source of data. Included to give user some idea of reliability and
	 * accuracy of data.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var string|null
	 */
	
	public $source;

	/**
	 * Links to external information about the route/track.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var Link[]
	 */
	public $links;

	/**
	 * GPS route/track number.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var int|null
	 */
	public $number;

	/**
	 * Type (classification) of route/track.
	 * An original GPX 1.1 attribute.
	 * 
	 * @var string|null
	 */
	public $type;

	/**
	 * Collection constructor.
	 */
	public function __construct()
	{
		$this->name = null;
		$this->comment = null;
		$this->description = null;
		$this->source = null;
		$this->links = [];
		$this->number = null;
		$this->type = null;
	}

}