<?php

namespace App\Providers;

use App\Routes\GetHello;
use CorsDev\SimpleFrameworkCore\Routing\Route;
use CorsDev\SimpleFrameworkCore\Routing\RouteProvider;
use Exception;

class AppRouteProvider extends RouteProvider
{
    /**
     * @throws Exception
     */
    public function boot()
    {
        $this->addRoutes([
            Route::make('/', 'GET', GetHello::class)
        ]);
    }
}