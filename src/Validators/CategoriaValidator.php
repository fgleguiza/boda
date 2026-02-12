<?php

namespace App\Validators;

use Exception;

class CategoriaValidator
{
    public static function validar(object $data): void
    {
        if (empty($data->nombre)) {
            throw new Exception("Nombre requerido");
        }

        if (strlen($data->nombre) < 3) {
            throw new Exception("Nombre muy corto");
        }
    }
}
