<?php
require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';

class Fila {
    private $inicio;
    private $fim;

    public function __construct() {
        $this->inicio = null;
        $this->fim = null;
    }

    public function inserirFila($processoNovo) {
        $no = new NoComUnicaLigacao($processoNovo);

        if ($this->fim === null) {
            $this->inicio = $no;
        } else {
            $this->fim->proximo = $no;
        }
        $this->fim = $no;
        echo "Inserido: " . $processoNovo . "\n";
    }

    public function removerFila() {
        if ($this->inicio === null) {
            echo "Fila vazia. Nada a remover.\n";
            return null;
        }

        $processoRemovido = $this->inicio->dado;
        $this->inicio = $this->inicio->proximo;

        if ($this->inicio === null) {
            $this->fim = null;
        }
        echo "Removido: " . $processoRemovido . "\n";

        return $processoRemovido;
    }

    public function imprimirEstado() {
        $atual = $this->inicio;
        echo "Estado da Fila: ";
        while ($atual !== null) {
            echo $atual->dado . " -> ";
            $atual = $atual->proximo;
        }
        echo "NULL\n";
    }
}
