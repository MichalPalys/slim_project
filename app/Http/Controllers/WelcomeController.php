<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class WelcomeController
{
    public function index(Request $request, Response $response): Response
    {
        $response->getBody()->write('Welcome Controller!');

        return $response;
    }
}