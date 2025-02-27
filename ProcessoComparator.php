<?php
require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';

class ProcessoComparator {
    public static function compararPorPrioridade($a, $b) {
        return $b->prioridade - $a->prioridade; /
    }

    public static function compararPorNome($a, $b) {
        return strcmp($a->nome, $b->nome);
    }
}
?>