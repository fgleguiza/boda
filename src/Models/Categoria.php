<?php

namespace App\Models;

class Categoria
{
    private ?int $id;
    private string $descripcion;
    private string $nombre;

    function __construct(
        ?int $id,
        string $nombre,
        string $descripcion,
    ) {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setDescripcion($descripcion);
    }

    function getId(): string
    {
        return $this->id;
    }

    function getDescripcion(): string
    {
        return $this->descripcion;
    }

    function getNombre(): string
    {
        return $this->nombre;
    }

    private function setId(?int $id): void
    {
        $this->id = $id;
    }

    private function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    private function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}
