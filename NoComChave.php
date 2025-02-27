<?php

class NoComChave {
    public $cpf;
    public $processo;
    public $proximo;

    public function __construct($cpf, $processo) {
        $this->cpf = $cpf;
        $this->processo = $processo;
        $this->proximo = null;
    }
}