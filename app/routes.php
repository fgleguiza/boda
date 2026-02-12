<?php

declare(strict_types=1);


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Controllers\TestController;
use App\Controllers\CategoriaController;

return function (App $app) {
    $app->options(pattern: '/{routes:.*}', callable: function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get(pattern: '/', callable: function (Request $request, Response $response) {
        $response->getBody()->write(string: 'Hello world!');
        return $response;
    });

    $app->group(pattern: '/gifter', callable: function (Group $group): void {
        $group->get(pattern: '', callable: TestController::class . ':testDB');
    });


    $app->group(pattern: '/categoria', callable: function (Group $group): void {
        $group->post('/add', CategoriaController::class . ':addCategoria');
    });
};
