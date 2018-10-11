<?php

namespace App\Router;

use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class RouterFactory
{

    /** @return \Nette\Application\IRouter */
    public static function createRouter()
    {
        $router = new RouteList();

        $frontRouter = $router[] = new RouteList('Front');
        $frontRouter[] = new Route('/nette/<presenter>/<action=default>[/<id>]', 'Homepage:default');

        return $router;
    }

}