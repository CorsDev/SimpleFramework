<?php

namespace App;

use App\Providers\AppRouteProvider;
use CorsDev\SimpleFrameworkCore\constants\HTTPStatusCodes;
use CorsDev\SimpleFrameworkCore\Response\Response;

class App
{

    public static function boot(): void
    {
        try {

            $provider = new AppRouteProvider();
            $provider->handleRequest();

        } catch (\Exception $e) {

            Response::make()->statusCode(HTTPStatusCodes::INTERNAL_SERVER_ERROR)->jsonBody([
                'error' => $e->getMessage(), 'stacktrace' => $e->getTrace()
            ])->sendAndDie();

        }

    }

}