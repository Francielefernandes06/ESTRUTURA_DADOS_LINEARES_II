<?php
class NoComUnicaLigacao {
    public $dado;
    public $proximo;


    public function __construct($dado) {
        $this->dado = $dado;
        $this->proximo = null;
    }
}
