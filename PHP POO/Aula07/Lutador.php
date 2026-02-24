<?php

class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Special Methods
    public function __construct($n,$nacio,$ida,$alt,$pes,$vi,$de,$em) {
        $this->setNome($n);
        $this->setNacionalidade($nacio);
        $this->setIdade($ida);
        $this->setAltura($alt);
        $this->setPeso($pes);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    
    public function apresentar(){
        echo "<p>Nome: " . $this->getNome() . "</p>";
        echo '<br>';
        echo "<p>Nacionalidade: " . $this->getNacionalidade()  . "</p>";
        echo '<br>';
        echo "<p>Idade: " . $this->getIdade()  . "</p>";
        echo '<br>';
        echo "<p>Categoria: " . $this->getCategoria()  . "</p>";
        echo '<br>';
    }
    
    public function status(){
        echo "Status de Carreira";
        echo '<br>';
        echo "<p>Vitórias: " . $this->getVitorias()  . "</p>";
        echo '<br>';
        echo "<p>Derrotas: " . $this->getDerrotas()  . "</p>";
        echo '<br>';
        echo "<p>Empates: " . $this->getEmpates()  . "</p>";
        echo '<br>';
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    //Métodos Padrões
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($p): void {
        $this->peso = $p;
        $this->setCategoria();
    }

    public function setCategoria(){
       if($this->peso < 52.2){
           $this->categoria = "Inválido";
       }else if($this->peso <= 70.3){
           $this->categoria = "Peso leve";
       }else if($this->peso <= 83.9){
           $this->categoria = "Peso Médio";
       }else if($this->peso <= 120.2){
           $this->categoria = "Peso Pesado";
       }else{
           $this->categoria = "Inválido";
       }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }


}
