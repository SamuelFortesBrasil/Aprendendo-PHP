<?php

require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;


    #[\Override]
    public function alimentar() {
        echo "<p>Comer folhas</p>";
    }

    #[\Override]
    public function fazerSom() {
        echo "<p>Som de réptil</p>";

    }

    #[\Override]
    public function locomover() {
        echo "<p>Rastejando</p>";
        
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
