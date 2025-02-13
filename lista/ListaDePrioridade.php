<?php

require_once __DIR__ . '/../NoComUnicaLigacao.php';
require_once __DIR__ . '/../Processo.php';

class ListaDePrioridade {
    public $inicio;

    public function __construct() {
        $this->inicio = null;
    }

    /**
     * Insere um novo processo na lista de acordo com a prioridade.
     * O processo de maior prioridade (menor valor numérico) será inserido no início.
     * @param Processo $processoNovo O processo a ser inserido.
     */
    public function inserir(Processo $processoNovo) {
        $novoNo = new NoComUnicaLigacao($processoNovo);

        if ($this->inicio === null) {
            $this->inicio = $novoNo;
            return;
        }
        if ($processoNovo->prioridade < $this->inicio->{"dado"}->{"prioridade"}) {
            $novoNo->proximo = $this->inicio;
            $this->inicio = $novoNo;
            return;
        }


        $atual = $this->inicio;

        while ($atual->proximo !== null && $atual->proximo->{"dado"}->{"prioridade"} <= $processoNovo->prioridade) {
            $atual = $atual->proximo;
        }

        $novoNo->proximo = $atual->proximo;

        $atual->proximo = $novoNo;

        echo "Inserido: " . $processoNovo->nome . 
             " (Prioridade: " . $processoNovo->prioridade . ")\n";      

       
    }

    /**
     * Remove o processo de maior prioridade (menor valor numérico).
     */
    public function remover() {
        if ($this->inicio === null) {
            echo "A lista de prioridade está vazia.\n";
            return null;
        }

        $removido = $this->inicio;
        $this->inicio = $this->inicio->proximo;
        echo "Removido: " . $removido->{"dado"}->{"nome"} . 
             " (Prioridade: " . $removido->{"dado"}->{"prioridade"} . ")\n";
        return $removido->{"dado"};
    }

    
    public function imprimirEstado() {
        if ($this->inicio === null) {
            echo "A lista de prioridade está vazia.\n";
            return;
        }

        $atual = $this->inicio;
        echo "Estado atual da Lista de Prioridade:\n";
        while ($atual !== null) {
            echo "Processo: " . $atual->{"dado"}->{"nome"} . 
            " (Prioridade: " . $atual->{"dado"}->{"prioridade"} . ")\n";
       
            $atual = $atual->proximo;
        }
    }
}

?>
