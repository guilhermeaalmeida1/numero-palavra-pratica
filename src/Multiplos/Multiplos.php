<?php

namespace src\Multiplos;

class Multiplos
{

    /**
     * @var int
     */
    public int $resultado = 0;

    /**
     * @var array
     */
    public array $numeroMultiploParaValidacao;

    public function __construct(int ...$num)
    {
        $this->numeroMultiploParaValidacao = $num;
    }


    /**
     * @param int $numero
     * @param int $numeroMultiplo
     * @return bool
     */
    public function verificaSeNumeroEMultiplo(int $numero, int $numeroMultiplo): bool
    {
        return ($numero % $numeroMultiplo) == 0;
    }

    private function somaResultado($numeroValidado): void
    {
        $this->resultado += $numeroValidado;
    }

    public function mostraResultado(): int
    {
        return $this->resultado;
    }

    public function validaNumeros($totalDeNumerosParaValicacao): void
    {
        foreach ($this->numeroMultiploParaValidacao as $numeroMultiplo) {
            for ($i = 0; $i < $totalDeNumerosParaValicacao; $i++) {
                if ($this->verificaSeNumeroEMultiplo($i, $numeroMultiplo)) {
                    $this->somaResultado($i);
                }
            }
        }
    }

    /**
     * @return array
     */
    public function getNumeroMultiploParaValidacao(): array
    {
        return $this->numeroMultiploParaValidacao;
    }


}