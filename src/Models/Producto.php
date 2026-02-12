<?php

namespace App\Models;

class Producto
{
    private string $id;
    private string $idCategoria;
    private string $descripcion;
    private string $nombre;
    private int $estado;
    private float $precio;

    function __construct(
        string $id,
        string $idCategoria,
        string $descripcion,
        string $nombre,
        int $estado,
        float $precio
    ) {
        $this->setId($id);
        $this->setIdCategoria($idCategoria);
        $this->setDescripcion($descripcion);
        $this->setNombre($nombre);
        $this->setEstado($estado);
        $this->setPrecio($precio);
    }

    function getId(): string
    {
        return $this->id;
    }

    function getIdCategoria(): string
    {
        return $this->idCategoria;
    }

    function getDescripcion(): string
    {
        return $this->descripcion;
    }

    function getNombre(): string
    {
        return $this->nombre;
    }

    function getEstado(): int
    {
        return $this->estado;
    }

    function getPrecio(): float
    {
        return $this->precio;
    }

    private function setId(string $id): void
    {
        $this->id = $id;
    }

    private function setIdCategoria(string $idCategoria): void
    {
        $this->idCategoria = $idCategoria;
    }

    private function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    private function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    private function setEstado(int $estado): void
    {
        $this->estado = $estado;
    }

    private function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }
}
