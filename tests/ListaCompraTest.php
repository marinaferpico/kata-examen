<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function givenInstructionAddProductWithoutQuantityReturnsProduct() : void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->instructionProduct("añadir pan");
        $this->assertEquals("pan x1", $result);

    }

    /**
     * @test
     */
    public function givenInstructionAddProductWithQuantityReturnsProduct() : void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->instructionProduct("añadir leche 2");
        $this->assertEquals("leche x2", $result);
    }

    /**
     * @test
     */
    public function givenInstructionAddExistProductReturnsProduct() : void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->instructionProduct("añadir pan");
        $result1 = $listaCompra->instructionProduct("añadir pan 2");
        $this->assertEquals("pan x3", $result1);

    }

    /**
     * @test
     */
    public function givenInstructionAddProductToNotEmptyListReturnListOfProducts() : void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->instructionProduct("añadir pan");
        $result1 = $listaCompra->instructionProduct("añadir leche 2");
        $this->assertEquals("leche x2, pan x1", $result1);

    }

    /**
     * @test
     */
    public function givenInstructionDeleteProductNotInListReturnsMessage() : void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->instructionProduct("eliminar leche");
        $this->assertEquals("El producto seleccionado no existe", $result);
    }
}
