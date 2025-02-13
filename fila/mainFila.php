<?php
require_once 'Fila.php';


class MainFila {
    public static function run(): void {
        $fila = new Fila();

        echo "Inserindo na fila...\n";
        $fila->inserirFila(new Processo("P1", 1));
        $fila->inserirFila(new Processo("P2", 2));
        $fila->inserirFila(new Processo("P3", 3));
        $fila->imprimirEstado();

        echo "Removendo da fila...\n";
        $fila->removerFila();
        $fila->removerFila();

        $fila->imprimirEstado();
    }
}

MainFila::run();