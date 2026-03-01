<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero {
    #[\Override]
    public function locomover() {
        echo "<p>Pulando.....</p>";
    }
}
