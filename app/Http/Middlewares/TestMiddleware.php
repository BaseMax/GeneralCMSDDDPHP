<?php

namespace CMS\Http\Middlewares;

use CMS\Http\Response;

class TestMiddleware implements MiddlewareInterface
{
    private string $next = \CMS\Http\Kernel::class;
    public function __invoke(\CMS\Http\Request $request): Response
    {
        // logic

        $response = call_user_func([new $this->next, "__invoke"], $request);
        return $response;
    }
}