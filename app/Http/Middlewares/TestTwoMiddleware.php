<?php

namespace CMS\Http\Middlewares;

use CMS\Http\Response;

class TestTwoMiddleware implements MiddlewareInterface
{
    private string $next = \CMS\Http\Middlewares\TestMiddleware::class;
    public function __invoke(\CMS\Http\Request $request): Response
    {

        // if($request->server["REMOTE_ADDR"] == "192.168.1.6")
        // {
        //     return new Response(
        //         "Your ip is blocked.",
        //         405
        //     );
        // }

        $response = call_user_func([new $this->next, "__invoke"], $request);
        return $response;
    }
}