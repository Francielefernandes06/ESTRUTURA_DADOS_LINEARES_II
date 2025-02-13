<?php

require_once 'ListaDePrioridade.php';

class MainListaDePrioridade {
    public static function run(): void {
        $listaDePrioridade = new ListaDePrioridade();

        $processo1 = new Processo("P1", 2);
        $processo2 = new Processo("P2", 5);
        $processo3 = new Processo("P3", 1);
        $processo4 = new Processo("P4", 4);

        $listaDePrioridade->inserir($processo1);
        $listaDePrioridade->inserir($processo2);
        $listaDePrioridade->inserir($processo3);
        $listaDePrioridade->inserir($processo4);

        $listaDePrioridade->imprimirEstado();

        $listaDePrioridade->remover();
        $listaDePrioridade->imprimirEstado();
    }
}


MainListaDePrioridade::run();