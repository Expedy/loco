<?php

namespace Expedy\Loco;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Expedy\Loco\Skeleton\SkeletonClass
 */
class LocoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'loco';
    }
}
