<?php

require_once __DIR__ . '/../NoComDuplaLigacao.php';
require_once __DIR__ . '/../Processo.php';

class ListaDuplamente {
    private $inicio;
    private $fim;

    public function __construct() {
        $this->inicio = null;
        $this->fim = null;
    }

    public function inserir($processoNovo) {
        $no = new NoComDuplaLigacao($processoNovo);
        
        if ($this->fim === null) {
            $this->inicio = $no;
        } else {
            $this->fim->proximo = $no;
            $no->anterior = $this->fim;
        }
        $this->fim = $no;
        echo "Inserido: " . $processoNovo->nome . "\n";
    }

    public function remover($data) {
        $atual = $this->inicio;

        while ($atual !== null) {
            if ($atual->dado->nome === $data) {
                if ($atual->anterior !== null) {
                    $atual->anterior->proximo = $atual->proximo;
                } else {
                    $this->inicio = $atual->proximo;
                }

                if ($atual->proximo !== null) {
                    $atual->proximo->anterior = $atual->anterior;
                } else {
                    $this->fim = $atual->anterior;
                }

                return;
            }
            $atual = $atual->proximo;
            echo "Removido: " . $data . "\n";
        }
        echo "Elemento não encontrado.\n";
    }

    public function imprimirEstado() {
        $atual = $this->inicio;
        if ($atual === null) {
            echo "A lista está vazia.\n";
            return;
        }
        
        echo "Estado da Lista Duplamente Encadeada:\n";
        
        // Exibe os elementos da lista com um formato mais organizado
        while ($atual !== null) {
            echo "[" . $atual->dado->nome . "] (Prioridade: " . $atual->dado->prioridade . ")";
            
            // Verifica se há próximo elemento
            if ($atual->proximo !== null) {
                echo " <-> ";
            }
            
            $atual = $atual->proximo;
        }
        
        echo "\n";
    }
    
}
