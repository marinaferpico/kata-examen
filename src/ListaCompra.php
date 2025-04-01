<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $productos = [];
    public function addProduct(string $instruction) : string
    {
        $instruction = explode(" ", $instruction);
        if(count($instruction) == 3) {;
            return $instruction[1] . " x" . $instruction[2];
        }
        return $instruction[1] . " x1";
    }

}