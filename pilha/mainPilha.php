<?php
require_once 'Pilha.php';


class MainPilha {
    public static function run(): void {
        $pilha = new Pilha();

        echo "Inserindo na pilha...\n";
        $pilha->inserirPilha(new Processo("P1", 1));
        $pilha->inserirPilha(new Processo("P2", 2));
        $pilha->inserirPilha(new Processo("P3", 3));
        $pilha->imprimirEstado();

        echo "Removendo da pilha...\n";
        $pilha->removerPilha();
        $pilha->removerPilha();
        $pilha->imprimirEstado();
    }
}

MainPilha::run();
