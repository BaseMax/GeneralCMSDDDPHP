<?php

namespace CMS\Http\Middlewares;

use Closure;
use CMS\Http\Request;
use CMS\Http\Response;

interface MiddlewareInterface
{
    public function __invoke(Request $request): Response;
}