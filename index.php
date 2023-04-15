<?php
class Desenho {
    private $linhaOriginal = array('_', '_', '_', '_', '_');

    public function desenharLinha($posicoes) {
        foreach ($posicoes as &$posicao) {
            $this->linhaOriginal[$posicao] = '*';
        }

        $this->imprimirLinhaNoConsole();
        $this->linhaOriginal = array('_', '_', '_', '_', '_');
    }

    private function imprimirLinhaNoConsole() {
        echo implode(' ', $this->linhaOriginal) . "\n";
    }
}

$desenho = new Desenho();

// Desenho em forma de X
$desenho->desenharLinha([0, 4]);
$desenho->desenharLinha([1, 3]);
$desenho->desenharLinha([2]);
$desenho->desenharLinha([1, 3]);
$desenho->desenharLinha([0, 4]);
echo "\n";

// Desenho em forma de cruz
$desenho->desenharLinha([2]);
$desenho->desenharLinha([1, 2, 3]);
$desenho->desenharLinha([2]);
$desenho->desenharLinha([2]);
$desenho->desenharLinha([2]);
