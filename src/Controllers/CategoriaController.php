<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Services\CategoriaService;

class CategoriaController
{
    private CategoriaService $service;
    public function __construct(CategoriaService $service)
    {
        $this->service = $service;
    }

    public function addCategoria(Request $request, Response $response): Response
    {
        $data = (object)$request->getParsedBody();

        $this->service->crear($data);

        $response->getBody()->write(json_encode([
            "status" => "OK"
        ]));

        return $response->withHeader('Content-Type', 'application/json');
    }
}
