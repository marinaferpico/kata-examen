<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $productos = [];
    public function instructionProduct(string $instruction) : string
    {
        $instruction = explode(" ", $instruction);
        $nameInstruction = $instruction[0];
        $nameProduct = $instruction[1];
        $quantity = count($instruction) == 3 ? (int)$instruction[2] : 1;

        if ($nameInstruction == "añadir") {
            foreach ($this->productos as &$producto) {
                if (strpos($producto, $nameProduct) === 0) {
                    $currentQuantity = (int)explode(" x", $producto)[1];
                    $producto = $nameProduct . " x" . ($currentQuantity + $quantity);

                    return implode(" ", $this->productos);
                }
            }
            $this->productos[] = $nameProduct . " x" . $quantity;
        }
        if ($nameInstruction == "eliminar") {
            return "El producto seleccionado no existe";
        }

        usort($this->productos, function($a, $b) {
            return strcasecmp($a, $b);
        });
        return implode(", ", $this->productos);
    }

}