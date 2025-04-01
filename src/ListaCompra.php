<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $productos = [];
    public function addProduct(string $instruction) : string
    {
        $instruction = explode(" ", $instruction);
        $nameProduct = $instruction[1];
        $quantity = count($instruction) == 3 ? (int)$instruction[2] : 1;

        foreach ($this->productos as &$producto) {
            if (strpos($producto, $nameProduct) === 0) {
                $currentQuantity = (int)explode(" x", $producto)[1];
                $producto = $nameProduct . " x" . ($currentQuantity + $quantity);
                return implode(" ", $this->productos);
            }
        }
        $this->productos[] = $nameProduct . " x" . $quantity;
        return implode(", ", $this->productos);
    }

}