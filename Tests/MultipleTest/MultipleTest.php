<?php

namespace Tests\MultipleTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Multiple\Multiple;

#[CoversClass(Multiple::class)]
class MultipleTest extends TestCase
{
    public function testIfMultipleNumbersForTestsWasDefined()
    {
        $this->assertEquals((new Multiple(3))->getMultipleNumbersForValidation() , array(3));
    }

    private function comparaResult($firstResult, $secondResult)
    {
        return $firstResult == $secondResult;
    }

    #[TestWith([23, 10, true])]
    #[TestWith([2633, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidMultipleOfThreeAndFive($compareResult, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(3,5);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($compareResult, $multiple->showResult()), $boolToCompare);
    }

    #[TestWith([18, 10, true])]
    #[TestWith([1683, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidatedMultiplosOfThree($compareResult, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(3);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($compareResult, $multiple->showResult()), $boolToCompare);
    }

    #[TestWith([5, 10, true])]
    #[TestWith([950, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidatedMultiplosOfFive($compareResult, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(5);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($compareResult, $multiple->showResult()), $boolToCompare);
    }

    #[TestWith([7, 10, true])]
    #[TestWith([735, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_sete($compareResult, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(7);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($compareResult, $multiple->showResult()), $boolToCompare);
    }

    #[TestWith([12, 10, true])]
    #[TestWith([1685, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_cinco_e_sete($compareResult, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(5,7);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($compareResult, $multiple->showResult()), $boolToCompare);
    }

    #[TestWith([25, 10, true])]
    #[TestWith([2418, 100, true])]
    #[TestWith([24, 10, false])]
    public function test_valida_multiplos_de_tres_e_sete($resultadoEsperado, $totalOfNaturalNumbers, $boolToCompare): void
    {
        $multiple = new Multiple(3,7);

        $multiple->validaNumeros($totalOfNaturalNumbers);

        $this->assertEquals($this->comparaResult($resultadoEsperado, $multiple->showResult()), $boolToCompare);
    }
}