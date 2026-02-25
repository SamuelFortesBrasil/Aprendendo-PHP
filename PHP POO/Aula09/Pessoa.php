<?php

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function fazerAniversario() {
        $this->getIdade()+1;
    }
    
    public function __construct($n, $ida, $sex) {
        $this->nome = $n;
        $this->idade = $ida;
        $this->sexo = $sex;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($n): void {
        $this->nome = $n;
    }

    public function setIdade($ida): void {
        $this->idade = $ida;
    }

    public function setSexo($sex): void {
        $this->sexo = $sex;
    }
    
}

