<?php
class Processo {
    public $nome;
    public $prioridade;

    public function __construct($nome, $prioridade) {
        $this->nome = $nome;
        $this->prioridade = $prioridade;
    }

    public function __toString() {
        return "Processo: {$this->nome}, Prioridade: {$this->prioridade}";
    }
}
