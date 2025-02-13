<?php
class NoComDuplaLigacao {
    public $dado;
    public $anterior;
    public $proximo;
    public function __construct($dado) {
        $this->dado = $dado;
        $this->anterior = null;
        $this->proximo = null;
           

    }
}
