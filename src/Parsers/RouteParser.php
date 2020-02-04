<?php

namespace Expedy\Loco\Parsers;

use Expedy\Loco\Models\Route;
use Expedy\Loco\Parsers\PointParser;

class RouteParser
{
    public static function parse(object $nodes)
    {
        $routes = [];

        foreach ($nodes as $node) {
            $route = new Route();

            if (isset($node->rtept)) {
                foreach ($node->rtept as $point) {
                    $route->points[] = PointParser::parse($point);
                }
            }

            $routes[] = $route;
        }
        return $routes;
    }
}
