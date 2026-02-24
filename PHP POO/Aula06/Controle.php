<?php

require_once 'Controlador.php';

class Controle implements Controlador {
    
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado=false;
        $this->tocando=false;
    }
    
    public function getVolume() {
        return $this->volume;
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function getTocando() {
        return $this->tocando;
    }

    public function setVolume($volume): void {
        $this->volume = $volume;
    }

    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    public function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
    
    #[\Override]
    public function ligar(){
        $this->setLigado(true);
        
    }
    
    #[\Override]
    public function desligar(){
        $this->setLigado(false);
    }
    
    #[\Override]
    public function abrirMenu(){
        echo "<br>Está ligado ? ".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando ? ".($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ".$this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }
    
    #[\Override]
    public function fecharMenu(){
        echo "Fechar menu";
    }
    
    #[\Override]
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+ 5);
        }
    }
    
    #[\Override]
    public function menosVolume() {
        if($this->getLigado()){
            $this->setTocando($this->getVolume() - 5);
        }
    }


    #[\Override]
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume()> 0){
            $this->setVolume(0);
        }
    }
    
    #[\Override]
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    
    #[\Override]
    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    
    #[\Override]
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

}
