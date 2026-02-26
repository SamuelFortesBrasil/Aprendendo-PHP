<?php

require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa() {
        echo "<p>Bolsa renovada!</p>";
    }
    
    #[\Override]
    public function pagarMensalidade() {
        echo"<p>O aluno {$this->getNome()} é bolsista, mensalidade paga</p>";
        parent::pagarMensalidade();
    }
}


//Falta classe Técnico com atributo tipoProfissional e método Praticar
//E classe professor, com atributos,"salario" e "atuando" e método aumentar salario