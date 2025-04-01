<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $productos = [];
    public function addProduct(string $instruction) : string
    {
        $instruction = explode(" ", $instruction);
        foreach ($this->productos as &$producto) {
            if (strpos($producto, $instruction[1]) === 0) {
                $currentQuantity = (int)explode(" x", $producto)[1];
                $producto = $instruction[1] . " x" . ($currentQuantity + $instruction[2]);
                return implode(", ", $this->productos);
            }
        }
        if(count($instruction) == 3) {;
            $producto =  $instruction[1] . " x" . $instruction[2];

        }
        if(count($instruction) == 2) {
            $producto = $instruction[1] . " x1";
        }
        $this->productos[] = $producto;
        return implode(", ", $this->productos);
    }

}