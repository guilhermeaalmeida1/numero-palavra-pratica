<?php

namespace Tests\MultiplosTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Multiplos\Multiplos;

#[CoversClass(Multiplos::class)]
class MultiplosTest extends TestCase
{
    public function test_numero_multiplo_para_teste_foi_definido()
    {
        $this->assertEquals((new Multiplos(3))->getNumeroMultiploParaValidacao() , array(3));
    }

    private function comparaResultado($primeiroResultado, $segundoResultado)
    {
        return $primeiroResultado == $segundoResultado;
    }

    #[TestWith([23, 10, true])]
    #[TestWith([2633, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_tres_e_cinco($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(3,5);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }

    #[TestWith([18, 10, true])]
    #[TestWith([1683, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_tres($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(3);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }

    #[TestWith([5, 10, true])]
    #[TestWith([950, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_cinco($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(5);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }

    #[TestWith([7, 10, true])]
    #[TestWith([735, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_sete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }

    #[TestWith([12, 10, true])]
    #[TestWith([1685, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_cinco_e_sete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(5,7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }

    #[TestWith([25, 10, true])]
    #[TestWith([2418, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_tres_e_sete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(3,7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()), $boolComparacao);
    }
}