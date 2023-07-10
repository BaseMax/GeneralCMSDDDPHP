<?php

namespace CMS\Http;

use Exception;

class Kernel
{
    public function __invoke(Request $request): Response
    {
        $dispatcher = \FastRoute\simpleDispatcher(function (\FastRoute\RouteCollector $routeController) {
            $routes = include BASE_PATH . "/app/Routes/web.php";

            foreach ($routes as $route) {
                $routeController->addRoute(...$route);
            }
        });

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo()
        );

        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                $V404 = include VIEW_PATH . "/_404.php";
                return new Response($V404, 404);

            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                $V405 = include VIEW_PATH . "/_405.php";
                return new Response($V405, 405);

            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                $instance = new $handler[0];
                return new Response(call_user_func_array([$instance, $handler[1]], $vars));

            default:
                return new Response();
        }
    }

    public function handler(Request $request): Response
    {
        try {
            $middlewares = include BASE_PATH . "/app/Http/MiddlewareStack.php";

            $firstMiddleware = new $middlewares[0];
            
            $Response = $firstMiddleware($request);

            // return $action();
            return $Response;
        } catch (Exception $e) {
            return new Response($e->getMessage(), 500);
        }
    }
}
