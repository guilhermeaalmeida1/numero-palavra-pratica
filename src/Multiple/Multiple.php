<?php

namespace src\Multiple;

class Multiple
{

    public int $result = 0;

    public array $multipleNumbersForValidation;

    public function __construct(int ...$num)
    {
        $this->multipleNumbersForValidation = $num;
    }

    public function isNumberAMultiple(int $number, int $multipleNumber): bool
    {
        return ($number % $multipleNumber) == 0;
    }

    private function sumResult($numberForValidation): void
    {
        $this->result += $numberForValidation;
    }

    public function showResult(): int
    {
        return $this->result;
    }

    public function validaNumeros($totalNumberForValidation): void
    {
        foreach ($this->multipleNumbersForValidation as $multipleNumber) {
            for ($i = 0; $i < $totalNumberForValidation; $i++) {
                if ($this->isNumberAMultiple($i, $multipleNumber)) {
                    $this->sumResult($i);
                }
            }
        }
    }

    public function getMultipleNumbersForValidation(): array
    {
        return $this->multipleNumbersForValidation;
    }
}