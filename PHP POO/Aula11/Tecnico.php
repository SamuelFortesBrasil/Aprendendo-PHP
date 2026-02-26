<?php

require_once 'Aluno.php';

class Tecnico extends Aluno{
    private $tipo;
    
    public function praticar() {
        echo "<p>O aluno está praticando {$this->getTipo()}</p>";
        
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }


}
