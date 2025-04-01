<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function givenInstructionAddProductWithoutQuantityReturnsProduct()
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->addProduct("añadir pan");
        $this->assertEquals("pan x1", $result);

    }

    /**
     * @test
     */
    public function givenInstructionAddProductWithQuantityReturnsProduct()
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->addProduct("añadir pan 2");
        $this->assertEquals("pan x2", $result);
    }

}
