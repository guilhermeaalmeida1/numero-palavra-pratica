<?php

namespace src\PalavraNumero;

use src\Happy\Happy;
use src\Multiple\Multiple;

class PalavraNumero
{
    public int $numeroGeradoComPalavra = 0;

    public function __construct(public string $palavra = '')
    {
    }

    public function DeParaLetraEmNumeros(): array
    {
        return [
            "a" => 1,
            "b" => 2,
            "c" => 3,
            "d" => 4,
            "e" => 5,
            "f" => 6,
            "g" => 7,
            "h" => 8,
            "i" => 9,
            "j" => 10,
            "k" => 11,
            "l" => 12,
            "m" => 13,
            "n" => 14,
            "o" => 15,
            "p" => 16,
            "q" => 17,
            "r" => 18,
            "s" => 19,
            "t" => 20,
            "u" => 21,
            "v" => 22,
            "w" => 23,
            "x" => 24,
            "y" => 25,
            "z" => 26,
            "A" => 27,
            "B" => 28,
            "C" => 29,
            "D" => 30,
            "E" => 31,
            "F" => 32,
            "G" => 33,
            "H" => 34,
            "I" => 35,
            "J" => 36,
            "K" => 37,
            "L" => 38,
            "M" => 39,
            "N" => 40,
            "O" => 41,
            "P" => 42,
            "Q" => 43,
            "R" => 44,
            "S" => 45,
            "T" => 46,
            "U" => 47,
            "V" => 48,
            "W" => 49,
            "X" => 50,
            "Y" => 51,
            "Z" => 52,
        ];
    }

    public function pegarNumeroDoDicionario($param): int
    {
        return $this->DeParaLetraEmNumeros()[$param];
    }

    /**
     * @return int
     */
    public function gerarNumeroComAsPalavra(): int
    {
        $palavraArray = str_split($this->palavra);

        foreach ($palavraArray as $item) {
            if (array_key_exists($item, $this->DeParaLetraEmNumeros())) {
                $this->numeroGeradoComPalavra += $this->pegarNumeroDoDicionario($item);
            }
        }
        return $this->numeroGeradoComPalavra;
    }

    public function multiplos(int $numero, int $numeroMultiplo): bool
    {
        return (new Multiple())->isNumberAMultiple($numero, $numeroMultiplo);
    }

    public function felizes()
    {
        return (new Happy($this->gerarNumeroComAsPalavra()))->sumResult();
    }
}