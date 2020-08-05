<?php

/* Global helpers function */

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;


if (!function_exists("view"))
{
    function view(Response $response, $template, $withData = []) {
        $cache = __DIR__ . '/../cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $withData);

        $response->getBody()->write($blade->render());

        return $response;
    }
}