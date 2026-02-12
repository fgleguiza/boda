<?php

namespace App\Controllers;

use PDO;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestController
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function testDB(Request $request, Response $response): Response
    {
        try {
            $stmt = $this->db->query("SELECT 1");
            $result = $stmt->fetch();

            $data = [
                "status" => "OK",
                "message" => "Conexión a DB exitosa",
                "result" => $result
            ];

        } catch (\Exception $e) {
            $data = [
                "status" => "ERROR",
                "message" => $e->getMessage()
            ];
        }

        $response->getBody()->write(json_encode($data));

        return $response->withHeader('Content-Type', 'application/json');
    }
}
