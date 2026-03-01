<?php

require_once 'Animal.php';

class Mamifero extends Animal {
    private $corDoPelo;

    #[\Override]
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    #[\Override]
    public function fazerSom() {
        echo "<p>Som de mamífero</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Correndo</p>";
        
    }
    
    public function getCorDoPelo() {
        return $this->corDoPelo;
    }

    public function setCorDoPelo($corDoPelo): void {
        $this->corDoPelo = $corDoPelo;
    }


}
