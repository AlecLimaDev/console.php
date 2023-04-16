<?php
class Desenho {
    private $linhaOriginal = array('_', '_', '_', '_', '_');

    public function desenhar($desenho) {
        $linhasDesenhadas = array_map(function ($linha) {
            $linhaDesenhada = $this->desenharLinha($linha);
            return implode(' ', $linhaDesenhada);
        }, $desenho);

        echo implode("\n", $linhasDesenhadas) . "\n";
        echo "\n";
    }

    private function desenharLinha($posicoes) {
        $linhaDesenhada = $this->linhaOriginal;
        foreach ($posicoes as $posicao) {
            $linhaDesenhada[$posicao] = '*';
        }

        return $linhaDesenhada;
    }
}

$desenho = new Desenho();

// Desenho em forma de X
$x = [[0, 4], [1, 3], [2], [1, 3], [0, 4]];
$desenho->desenhar($x);

// Desenho em forma de CRUZ
$CRUZ = [[2], [1, 2, 3], [2], [2], [2]];
$desenho->desenhar($CRUZ);


