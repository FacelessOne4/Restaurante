<?php

class Bebida {
    private $nome;
    private $volume;
    private $alcoolico;
    private $preco;

    public function __construct($nome, $volume, $alcoolico, $preco) {
        $this->setNome($nome);
        $this->setVolume($volume);
        $this->setAlcoolico($alcoolico);
        $this->setPreco($preco);
    }

    public function setNome($nome) {
        if (empty($nome) || strlen($nome) < 3) {
            throw new Exception("O nome precisa ter pelo menos 3 caracteres.");
        }

        $this->nome = $nome;
    }

    public function setVolume($volume) {
        if ($volume <= 200) {
            throw new Exception("O volume precisa ser maior que 200.");
        }

        $this->volume = $volume;
    }

    public function setAlcoolico($alcoolico) {
        if (!is_bool($alcoolico)) {
            throw new Exception("O valor alcoólico deve ser TRUE ou FALSE.");
        }

        $this->alcoolico = $alcoolico;
    }

    public function setPreco($preco) {
        if (!is_numeric($preco) || $preco <= 0) {
            throw new Exception("O preço precisa ser maior que zero.");
        }

        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function getAlcoolico() {
        return $this->alcoolico;
    }

    public function getPreco() {
        return $this->preco;
    }
}