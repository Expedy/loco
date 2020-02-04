<?php

namespace Expedy\Loco\Parsers;

use Expedy\Loco\Models\Point;

class PointParser
{
    public static function parse(object $node)
    {
        $point = new Point();

        $point->latitude = (float) $node['lat'] ?? null;
        $point->longitude = (float) $node['lon'] ?? null;
        $point->elevation = (float) $node->ele ?? null;
        $point->time = new \DateTime($node->time) ?? null;

        return $point;
    }
}
