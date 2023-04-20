<?php

namespace Tests\PalavraNumero;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Felizes\Felizes;
use src\Multiplos\Multiplos;
use src\PalavraNumero\PalavraNumero;

#[CoversClass(PalavraNumero::class)]
#[CoversClass(Multiplos::class)]
#[CoversClass(Felizes::class)]
class PalavraNumeroTest extends TestCase
{
    #[TestWith(["a", 71])]
    #[TestWith(["A", 71])]
    public function testDicionarioExiste($dadaPalavra)
    {
        $palavraEmNumero = (new PalavraNumero())->DeParaLetraEmNumeros();

        $this->assertCount(52, $palavraEmNumero);
        $this->assertTrue(array_key_exists($dadaPalavra, $palavraEmNumero));
        $this->assertTrue(array_key_exists($dadaPalavra, $palavraEmNumero));
    }


    #[TestWith(["Palavra", 97])]
    #[TestWith(["PALAVRA", 253])]
    public function testGerarNumeroComPalavra($dadaPalavra, $total)
    {
        $this->assertEquals((new PalavraNumero($dadaPalavra))->gerarNumeroComAsPalavra(), $total);
    }

    #[TestWith(["palavra", 3, false])]
    #[TestWith(["palavra", 5, false])]
    #[TestWith(["c", 3, true])]
    #[TestWith(["e", 5, true])]
    public function testNumerosMultiplos($dadaPalavra, $numeroMultiplo, $multiplosSimNao)
    {
        $numeroDaPalavra = (new PalavraNumero($dadaPalavra))->gerarNumeroComAsPalavra();

        $this->assertEquals((new PalavraNumero($dadaPalavra))->multiplos($numeroDaPalavra, $numeroMultiplo), $multiplosSimNao);
    }

    #[TestWith(["ai", 1])]
    #[TestWith(["e", false])]

    public function testNumerosFelizes($dadaPalavra, $multiplosSimNao)
    {
        $this->assertEquals((new PalavraNumero($dadaPalavra))->felizes(), $multiplosSimNao);
    }


}
