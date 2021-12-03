<?php

namespace App\Routes;

use CorsDev\SimpleFrameworkCore\Request\Request;
use CorsDev\SimpleFrameworkCore\Response\Response;
use CorsDev\SimpleFrameworkCore\Routing\RouteHandler;

class GetHello implements RouteHandler
{

    public function validate(Request $request): array
    {
        return [];
    }

    public function handle(Request $request): ?Response
    {
        return Response::make()->jsonBody(['message' => 'Hello World']);
    }
}