<?php

class ProductoImagen
{
    private string $id;
    private string $idProducto;
    private string $url;

    function __construct(
        string $id,
        string $idProducto,
        string $url
    ) {
        $this->setId($id);
        $this->setIdProducto($idProducto);
        $this->setUrl($url);
    }

    function getId(): string
    {
        return $this->id;
    }

    function getIdProducto(): string
    {
        return $this->idProducto;
    }

    function getUrl(): string
    {
        return $this->url;
    }

    private function setId(string $id): void
    {
        $this->id = $id;
    }

    private function setIdProducto(string $idProducto): void
    {
        $this->idProducto = $idProducto;
    }

    private function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
