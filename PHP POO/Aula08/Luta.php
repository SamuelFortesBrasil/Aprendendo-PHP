<?php

    require_once 'Lutador.php';

class Luta{
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;
    private $vencedor;


    //Special Methods
    public function marcarLuta($lutador1,$lutador2){
        $this->desafiante = $lutador1;
        $this->desafiado = $lutador2;
        $this->rounds= intdiv($lutador1 -> getPeso(), $lutador2 -> getVitorias());
        if($this->rounds === 0){
            $this->aprovada = false;
        }else{
            $this-> aprovada = true;
        }
    }
    
    public function lutar() {
        $calcL1 = (int)(($this->desafiante -> getIdade() * $this->desafiante-> getPeso())/ $this->rounds);
        $calcL2 = (int)(($this->desafiado -> getIdade() * $this->desafiado-> getPeso())/ $this->rounds);
        
        if($this->desafiante->getVitorias() > $this->desafiante->getDerrotas()){
            $calcL1 *= 2;
        }
        
        if($this->desafiado->getVitorias() > $this->desafiado->getDerrotas()){
            $calcL2 *= 2;
        }
        
        $this->desafiante -> apresentar();
        echo "<br>";
        $this->desafiante -> status();
        echo "<br>";
        $this->desafiado -> apresentar();
        echo "<br>";
        $this->desafiado -> status();
        echo "<br>";
        echo "<p>--------------------------------</p>";
        if($this->aprovada){
            echo "<p>A luta foi aprovada e conteve {$this->rounds} Rounds!</p>";
            echo "<br>";
            if($calcL1 > $calcL2){
               echo "<p>O vencedor da luta sendo {$this->desafiante->getNome()} com pontuação de {$calcL1} </p>";
               $this->desafiante->ganharLuta();
               $this->desafiado->perderLuta();
             }else{
               echo "<p>O vencedor da luta sendo {$this->desafiado->getNome()} com pontuação de {$calcL2}</p>";
               $this->desafiado->ganharLuta();
               $this->desafiante->perderLuta();
            }
            
            
        }else{
            echo "<p>A luta não foi aprovada! Os lutadores não estavam em níveis semelhantes!";
        }
    }
    
    //Fórmula de calculo de vitória
    //  (idade * peso)/ rounds === resul
    // Se nDeVitoria > nDeDerrota
    // resul * 2 -> bônus para habilidade
    //Não adicionar multiplicação nula
    //Usar intDiv() para pegar somente o inteiro da conta
    
    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }


}
