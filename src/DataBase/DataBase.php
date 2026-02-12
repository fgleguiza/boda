<?php

namespace App\Database;

use PDO;

class DataBase
{
    public static function conexion(): pdo
    {
        $pdo = new PDO(
            dsn: 'mysql:host=localhost;dbname=boda;charset=utf8',
            username: 'root',
            password: ''
        );

        $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
