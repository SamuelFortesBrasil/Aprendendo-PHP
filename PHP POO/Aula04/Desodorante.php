<?php

class Desodorante {
    private $corLata;
    private $spray;
    private $tamanho;
    private $marca;
    
    public function __construct($c,$t) {
        $this->corLata = $c;
        $this->tamanho = $t;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($m){
        $this->marca = $m;
    }
    
     public function setSpray($s){
        $this-> spray = $s;
    }
    

    public function getSpray(){
        if($this->spray === true){
            return "Está em spray!";
        }else{
            return "Não está em spray!";
        }
    }
    
    
}
