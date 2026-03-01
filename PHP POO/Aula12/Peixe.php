<?php

require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;


    #[\Override]
    public function alimentar() {
        echo "<p>Come algas</p>";

    }

    #[\Override]
    public function fazerSom() {
        echo "<p>Peixe não faz som</p>";
        
    }

    #[\Override]
    public function locomover() {
        echo "<p>nadar</p>";
        
    }
    
    public function soltarBolhas(){
        echo "<p>Soltar bolhas</p>";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
