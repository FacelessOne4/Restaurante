<?php

class Sobremesa {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->setNome($nome);
        $this->setPreco($preco);
    }

    public function setNome($nome) {
        if (empty($nome) || strlen($nome) < 3) {
            throw new Exception("O nome precisa ter pelo menos 3 caracteres.");
        }

        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if (!is_numeric($preco) || $preco < 0) {
            throw new Exception("O preço não pode ser negativo e precisa ser um número.");
        }

        $this->preco = $preco;
    }

    public function aplicarDesconto($valorDesconto) {
        $this->preco = $this->preco - ($this->preco * $valorDesconto / 100);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}