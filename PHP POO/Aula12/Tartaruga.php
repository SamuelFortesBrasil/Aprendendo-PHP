<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil {
    #[\Override]
    public function andar() {
        echo "<p>Anda MUUUUUITO devagar.....</p>";
    }
    
}
