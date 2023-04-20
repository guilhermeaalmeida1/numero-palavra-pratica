<?php

namespace Tests\FelizesTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use src\Felizes\Felizes;

#[CoversClass(Felizes::class)]
class FelizesTest extends TestCase
{

    public function testSomatoriaIgualUm()
    {
        $numerosFelizes = new Felizes(1);

        $this->assertEquals($numerosFelizes->somaResultado(), 1);
    }

    public function testSomatoriaIgualUmComNumeroDois()
    {
        $numerosFelizes = new Felizes(2);

        $this->assertEquals($numerosFelizes->somaResultado(), false);
    }

    public function testSomatoriaIgualUmComNumeroTres()
    {
        $numerosFelizes = new Felizes(3);

        $this->assertEquals($numerosFelizes->somaResultado(), false);
    }

    public function testSomatoriaIgualUmComNumeroDez()
    {
        $numerosFelizes = new Felizes(1);

        $this->assertEquals($numerosFelizes->somaResultado(), 1);
    }

    public function testNumeroElevado()
    {
        $numerosFelizes = new Felizes(1);

        $this->assertEquals($numerosFelizes->elevaNumero(2), 4);
    }

    public function testVazio()
    {
        $numerosFelizes = new Felizes();

        $this->assertFalse($numerosFelizes->somaResultado());
    }

}
