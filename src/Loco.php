<?php

namespace Expedy\Loco;

use Expedy\Loco\Models\GpxFile;
use Expedy\Loco\Parsers\RouteParser;
use Expedy\Loco\Parsers\TrackParser;

class Loco
{
    public static function load(string $path)
    {
        $xml = file_get_contents($path);
        return self::parse($xml);
    }

    public static function parse(string $xml)
    {
        $xml = simplexml_load_string($xml);

        $gpx = new GpxFile();

        $gpx->creator = (string) $xml['creator'] ?? null;
        $gpx->routes = RouteParser::parse($xml->rte) ?? [];
        $gpx->tracks = TrackParser::parse($xml->trk) ?? [];

        return $gpx;
    }
}
