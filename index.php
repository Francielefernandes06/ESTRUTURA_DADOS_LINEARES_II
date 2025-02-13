<?php

declare(strict_types=1);

require_once 'lista/mainListaDePrioridade.php';
require_once 'fila/mainFila.php';
require_once 'pilha/mainPilha.php';
require_once 'lista/mainListaSimplesmenteEncadeada.php';
require_once 'lista/mainListaDuplamente.php';



function mostrarMenu(): void {
    echo "==============================\n";
    echo " ESTRUTURAS DE DADOS \n";
    echo "==============================\n";
    echo "1. Lista de Prioridade\n";
    echo "2. Fila\n";
    echo "3. Pilha\n";
    echo "4. Lista Simplesmente Encadeada\n";
    echo "4. Lista Duplamente Encadeada\n";

    echo "0. Sair\n";
    echo "Escolha uma opção: ";
}

do {
    mostrarMenu();
    $opcao = trim(fgets(STDIN));
    switch ($opcao) {
        case '1':
            echo "\n--- Lista de Prioridade ---\n";
            MainListaDePrioridade::run();
            break;
        case '2':
            echo "\n--- Fila ---\n";
            MainFila::run();
            break;
        case '3':
            echo "\n--- Pilha ---\n";
            MainPilha::run();
            break;
        case '4':
            echo "\n--- Lista Simplesmente Encadeada ---\n";
            MainListaSimplesmenteEncadeada::run();
            break;
        case '5':
            echo "\n--- Lista Duplamente Encadeada ---\n";
            MainListaDuplamente::run();
            break;
        case '0':
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida!\n";
    }

    echo "\nPressione ENTER para continuar...";
    fgets(STDIN);
} while ($opcao != 0);
