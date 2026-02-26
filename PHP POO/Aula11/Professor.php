<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $salario;
    private $atuaçao;
    
    public function aumentarSalario($v){
        $this->salario += $v;
    }
    
    public function getSalario() {
        return $this->salario;
    }

    public function getAtuaçao() {
        return $this->atuaçao;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    public function setAtuaçao($atuaçao): void {
        $this->atuaçao = $atuaçao;
    }


}
