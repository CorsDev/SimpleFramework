<?php

namespace App;

use App\Providers\AppRouteProvider;
use CorsDev\SimpleFrameworkCore\Response\Response;

class App
{

    public static function boot(): void
    {
        try {

            $provider = new AppRouteProvider();
            $provider->handleRequest();

        } catch (\Exception $e) {
            Response::fromException($e)->sendAndDie();
        }

    }

}