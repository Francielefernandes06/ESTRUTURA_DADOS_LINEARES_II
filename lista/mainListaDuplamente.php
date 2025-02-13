<?php

require_once 'ListaDuplamente.php';

class MainListaDuplamente {
    public static function run(): void {
        $lista = new ListaDuplamente();

        echo "Inserindo na lista...\n";
        $lista->inserir(new Processo("P1", 1));
        $lista->inserir(new Processo("P2", 2));
        $lista->inserir(new Processo("P3", 3));
        $lista->imprimirEstado();

        echo "Removendo da lista...\n";
        $lista->remover("P2");
        $lista->imprimirEstado();
    }
}

MainListaDuplamente::run();