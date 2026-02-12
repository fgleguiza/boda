<?php

namespace App\Contracts;

interface CrudInterface
{
    public function crear(object $data);
    // public function actualizar(array $data);
    // public function eliminar(int $id);
    // public  function listar(?int $id);
}
