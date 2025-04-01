<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $productos = [];
    public function addProduct(string $instruction) : string
    {
        $instruction = explode(" ", $instruction);
        if(count($instruction) == 3) {;
            $producto =  $instruction[1] . " x" . $instruction[2];
            $this->productos[] = $producto;
            return $producto;

        }
        $producto = $instruction[1] . " x1";
        $this->productos[] = $producto;
        return implode(", ", $this->productos);
    }

}