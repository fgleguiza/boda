<?php

namespace App\Services;

use App\Contracts\CrudInterface;
use App\Models\Categoria;
use PDO;
use App\Validators\CategoriaValidator;
use Exception;

class CategoriaService implements CrudInterface
{

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    function crear(object $data): void
    {
        try {
            CategoriaValidator::validar($data);

            $categoria = new Categoria(null, $data->nombre, $data->descripcion);

            $stmt = $this->db->prepare("
                INSERT INTO categorias (nombre, descripcion)
                VALUES (:nombre, :descripcion)
            ");

            $stmt->execute([
                ':nombre' => $categoria->getNombre(),
                ':descripcion' => $categoria->getDescripcion()
            ]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
