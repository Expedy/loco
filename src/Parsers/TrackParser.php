<?php

namespace Expedy\Loco\Parsers;

use Expedy\Loco\Models\Track;
use Expedy\Loco\Parsers\PointParser;

class TrackParser
{
    public static function parse(object $nodes)
    {
        $tracks = [];

        foreach ($nodes as $node) {
            $track = new Track();

            if (isset($node->trkseg)) {
                foreach ($node->trkseg as $segment) {
                    foreach ($segment->trkpt as $point) {
                        $track->points[] = PointParser::parse($point);
                    }
                }
            }

            $tracks[] = $track;
        }
        return $tracks;
    }
}
