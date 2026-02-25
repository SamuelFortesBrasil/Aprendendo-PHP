<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual = 0;
    private $aberto = "<p>O livro não está aberto</p>";
    private $leitor;
    
    public function detalhes(){
        echo "<p>Informações sobre o livro</p>";
        echo "<br>";
        echo "<p>Leitor: {$this->leitor}</p>";
        echo "<br>";
        echo "<p>Título: {$this->titulo}</p>";
        echo "<br>";
        echo "<p>Total de Páginas {$this->totPaginas}</p>";
        echo "<br>";
        echo $this->aberto;
        echo "<br>";
        echo "<p>Autor: {$this->autor}</p>";
        echo "<br>";
    }
    
    public function __construct($title, $aut, $totPag,$leitor) {
        $this->titulo = $title;
        $this->autor = $aut;
        $this->totPaginas = $totPag;
        $this->leitor = $leitor->getNome();
    }
    
    #[\Override]
    public function abrir(){
        $this->setAberto("<p>O livro está aberto</p>");
    }
    
    #[\Override]
    public function fechar(){
        $this->setAberto("<p>O livro está fechado</p>");
    }
    
    #[\Override]
    public function folhear(){
        $this->setPagAtual(mt_rand(0, $this->totPaginas));
    }
    
    #[\Override]
    public function avancarPag() {
        $this->getPagAtual()+1;
    }
    
    #[\Override]
    public function voltarPag() {
        $this->getPagAtual()-1;
    }
    

    
    

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        echo "<p>A página atual é {$this->pagAtual} </p>";
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($title): void {
        $this->titulo = $title;
    }

    public function setAutor($aut): void {
        $this->autor = $aut;
    }

    public function setTotPaginas($totPag): void {
        $this->totPaginas = $totPag;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($abe): void {
        $this->aberto = $abe;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

}
