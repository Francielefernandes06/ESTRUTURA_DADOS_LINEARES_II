<?php
require_once 'ListaSimplesmenteEncadeada.php';


class MainListaSimplesmenteEncadeada
{
    public static function run(): void
    {
        $lista = new ListaSimplesmenteEncadeada();

        $processo1 = new Processo("P1", 2);
        $processo2 = new Processo("P2", 3);
        $processo3 = new Processo("P3", 1);
        $processo4 = new Processo("P4", 4);

        $lista->inserir($processo1);
        $lista->inserir($processo2);
        $lista->inserir($processo3);
        $lista->inserir($processo4);

        $lista->imprimirEstado();

        $lista->remover("P2");
        $lista->imprimirEstado();

        $lista->remover("P4");
        $lista->imprimirEstado();

        $lista->remover("P5");
        $lista->imprimirEstado();

    }
}



MainListaSimplesmenteEncadeada::run();