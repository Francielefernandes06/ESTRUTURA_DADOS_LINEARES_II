<?php 

require_once 'Dicionario.php';


$dicionario = new Dicionario(10);

$dicionario->adicionarProcesso("12345678900", new Processo("Paciente A", 1));
$dicionario->adicionarProcesso("98765432100", new Processo("Paciente B", 2));
$dicionario->adicionarProcesso("11122233344", new Processo("Paciente C", 3));

$dicionario->adicionarProcesso("22334455666", new Processo("Paciente D", 4));  

echo "Processos armazenados:\n";
$dicionario->imprimirProcessos();

$dicionario->removerProcesso("98765432100");
echo "\nApós remover Paciente B:\n";
$dicionario->imprimirProcessos();