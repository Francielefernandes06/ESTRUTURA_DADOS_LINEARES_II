<?php
require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';
require_once __DIR__ . '/FilaIterator.php';

class Fila implements IteratorAggregate {
    private $inicio;
    private $fim;

    private $elementos;


    public function __construct() {
        $this->inicio = null;
        $this->fim = null;
        $this->elementos = [];
    }

    public function inserirFila($processoNovo) {
        $no = new NoComUnicaLigacao($processoNovo);

        if ($this->fim === null) {
            $this->inicio = $no;
        } else {
            $this->fim->proximo = $no;
        }
        $this->fim = $no;
        $this->elementos[] = $processoNovo;

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
        $this->elementos = array_filter($this->elementos, fn($p) => $p !== $processoRemovido);
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

    public function getIterator(): FilaIterator {
        return new FilaIterator($this->inicio);
    }

    public function ordenarPorPrioridade() {
        usort($this->elementos, ['ProcessoComparator', 'compararPorPrioridade']);
    }

    public function ordenarPorNome() {
        usort($this->elementos, ['ProcessoComparator', 'compararPorNome']);
    }
}
