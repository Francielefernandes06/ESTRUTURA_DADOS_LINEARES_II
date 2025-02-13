<?php
require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';

class Pilha {
    private $topo;

    public function __construct() {
        $this->topo = null;
    }

    public function inserirPilha($processoNovo) {
        $no = new NoComUnicaLigacao($processoNovo);
        $no->proximo = $this->topo;
        $this->topo = $no;
        echo "Inserido: " . $processoNovo . "\n";
    }

    public function removerPilha() {
        if ($this->topo === null) {
            echo "Pilha vazia. Nada a remover.\n";
            return null;
        }

        $processoRemovido = $this->topo->dado;
        $this->topo = $this->topo->proximo;
        echo "Removido: " . $processoRemovido . "\n";

        return $processoRemovido;
    }

    public function imprimirEstado() {
        $atual = $this->topo;
        echo "Estado da Pilha: TOPO -> ";
        while ($atual !== null) {
            echo $atual->dado . " -> ";
            $atual = $atual->proximo;
        }
        echo "NULL\n";
       
    }
}
