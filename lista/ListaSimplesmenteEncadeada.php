<?php

require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';
require_once __DIR__ . '/ListaIterator.php';

class ListaSimplesmenteEncadeada implements IteratorAggregate {
    private $inicio;

    public function __construct() {
        $this->inicio = null;
    }

    public function inserir(Processo $processoNovo) {
        $novoNo = new NoComUnicaLigacao($processoNovo);
        
        if ($this->inicio === null) {
            $this->inicio = $novoNo;
        } else {
            $atual = $this->inicio;
            while ($atual->proximo !== null) {
                $atual = $atual->proximo;
            }
            $atual->proximo = $novoNo;
            
        }
        echo "Inserido: " . $processoNovo->nome . " (Prioridade: " . $processoNovo->prioridade . ")\n";
    }

    public function remover($nomeProcesso) {
        if ($this->inicio === null) {
            echo "A lista está vazia.\n";
            return;
        }

        if ($this->inicio->{"dado"}->{"nome"} === $nomeProcesso) {
            echo "Removendo: " . $this->inicio->{"dado"}->{"nome"} . "\n";
            $this->inicio = $this->inicio->proximo;
            return;
        }

        $atual = $this->inicio;
        while ($atual->proximo !== null) {
            if ($atual->proximo->{"dado"}->{"nome"} === $nomeProcesso) {
                echo "Removendo: " . $atual->proximo->{"dado"}->{"nome"} . "\n";
                $atual->proximo = $atual->proximo->proximo;
                return;
            }
            $atual = $atual->proximo;
        }

        echo "Processo " . $nomeProcesso . " não encontrado na lista.\n";
    }

    public function imprimirEstado() {
        if ($this->inicio === null) {
            echo "A lista está vazia.\n";
            return;
        }

        $atual = $this->inicio;
        echo "Estado atual da Lista Simplesmente Encadeada:\n";
        while ($atual !== null) {
            echo "Processo: " . $atual->{"dado"}->{"nome"} . " (Prioridade: " . $atual->{"dado"}->{"prioridade"} . ")\n";
            $atual = $atual->proximo;
        }
    }

    public function getIterator(): Traversable {
        var_dump($this->inicio);
        return new ListaIterator($this->inicio);
    }
}


?>
