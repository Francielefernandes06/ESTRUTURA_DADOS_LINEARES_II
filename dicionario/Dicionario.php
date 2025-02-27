<?php

require_once __DIR__ . '/../Processo.php';
require_once __DIR__ . '/../NoComChave.php';

class Dicionario {
    private $tabela;
    private $capacidade;

    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
        $this->tabela = array_fill(0, $capacidade, null);  // Inicializa a tabela como um array de nulos
    }

    /**
     * Função de hash para converter o CPF em um índice do vetor.
     */
    private function hash($cpf) {
        $hash = abs(crc32($cpf)) % $this->capacidade;
        echo "Hash para $cpf: $hash\n";
        return $hash;
    }

    /**
     * Adiciona um novo processo ao dicionário usando CPF como chave.
     * @param string $cpf CPF do paciente.
     * @param Processo $processo Objeto Processo a ser armazenado.
     */
    public function adicionarProcesso($cpf, $processo) {
        $indice = $this->hash($cpf);
        $novaEntrada = new NoComChave($cpf, $processo);

        if ($this->tabela[$indice] === null) {
            $this->tabela[$indice] = $novaEntrada;
            echo "Processo adicionado.\n";
        } else {
            $atual = $this->tabela[$indice];
            echo "Colisão detectada. \n";
           

            while ($atual->proximo !== null) {
                echo "Indo para o próximo... $atual\n";
                if ($atual->cpf === $cpf) {
                    $atual->processo = $processo;
                    return;
                }
                $atual = $atual->proximo;
                echo "Atual: $atual\n";

            }
            if ($atual->cpf === $cpf) {
                $atual->processo = $processo;
            } else {
                $atual->proximo = $novaEntrada;
            }
        }
    }

    /**
     * Remove um processo pelo CPF.
     * @param string $cpf CPF do paciente.
     */
    public function removerProcesso($cpf) {
        $indice = $this->hash($cpf);

        $atual = $this->tabela[$indice];
        $anterior = null;

        while ($atual !== null && $atual->cpf !== $cpf) {
            $anterior = $atual;
            $atual = $atual->proximo;
        }

        if ($atual === null) {
            echo "Processo não encontrado.\n";
            return;
        }

        if ($anterior === null) {
            // Remover o primeiro nó
            $this->tabela[$indice] = $atual->proximo;
        } else {
            // Remover o nó intermediário ou final
            $anterior->proximo = $atual->proximo;
        }
    }

    /**
     * Busca um processo pelo CPF.
     * @param string $cpf CPF do paciente.
     * @return Processo|null Objeto Processo encontrado ou null se não existir.
     */
    public function buscarProcesso($cpf) {
        $indice = $this->hash($cpf);
        $atual = $this->tabela[$indice];

        while ($atual !== null) {
            if ($atual->cpf === $cpf) {
                return $atual->processo;
            }
            $atual = $atual->proximo;
        }

        return null;  // Se não encontrado
    }

    /**
     * Imprime todos os processos armazenados.
     */
    public function imprimirProcessos() {
        foreach ($this->tabela as $indice => $entrada) {
            $atual = $entrada;
            while ($atual !== null) {
                echo "Índice: $indice, CPF: " . $atual->cpf . ", " . $atual->processo . "\n";
                $atual = $atual->proximo;
            }
        }
    }
}