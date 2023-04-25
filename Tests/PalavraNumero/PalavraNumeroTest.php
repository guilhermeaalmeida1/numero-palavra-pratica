<?php

namespace Tests\PalavraNumero;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Happy\Happy;
use src\Multiple\Multiple;
use src\WordToNumber\WordToNumber;

#[CoversClass(WordToNumber::class)]
#[CoversClass(Multiple::class)]
#[CoversClass(Happy::class)]
class PalavraNumeroTest extends TestCase
{
    #[TestWith(["a", 71])]
    #[TestWith(["A", 71])]
    public function testDicionaryExist($word)
    {
        $letterToNumber = (new WordToNumber())->fromLetterToNumber();

        $this->assertCount(52, $letterToNumber);
        $this->assertTrue(array_key_exists($word, $letterToNumber));
        $this->assertTrue(array_key_exists($word, $letterToNumber));
    }


    #[TestWith(["Palavra", 97])]
    #[TestWith(["PALAVRA", 253])]
    public function testGenerateNUmberWithWord($word, $total)
    {
        $this->assertEquals((new WordToNumber($word))->genereteNumberFromWord(), $total);
    }

    #[TestWith(["palavra", 3, false])]
    #[TestWith(["palavra", 5, false])]
    #[TestWith(["c", 3, true])]
    #[TestWith(["e", 5, true])]
    public function testNumerosMultiplos($word, $multipleNumber, $multipleYesNo)
    {
        $numeroDaPalavra = (new WordToNumber($word))->genereteNumberFromWord();

        $this->assertEquals((new WordToNumber($word))->multiple($numeroDaPalavra, $multipleNumber), $multipleYesNo);
    }

    #[TestWith(["ai", 1])]
    #[TestWith(["e", false])]

    public function testHappyNumber($word, $multipleYesNo)
    {
        $this->assertEquals((new WordToNumber($word))->happy(), $multipleYesNo);
    }


}
