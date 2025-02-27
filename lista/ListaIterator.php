<?php

require_once __DIR__ . '/../NoComUnicaLigacao.php';

class ListaIterator implements Iterator {
    private $atual;

    public function __construct($inicio) {
        $this->atual = $inicio;
    }

    public function current(): mixed {
        return $this->atual->dado;
    }

    public function key(): mixed {
        return spl_object_id($this->atual); 
    }

    public function next(): void {
        $this->atual = $this->atual->proximo;
    }

    public function rewind(): void {
        // Não pode ser reinicializado diretamente sem referência ao início
    }

    public function valid(): bool {
        return $this->atual !== null;
    }
}