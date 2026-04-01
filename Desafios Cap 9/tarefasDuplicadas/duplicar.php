<?php
    session_start();
    require 'banco.php';
    require 'ajudantes.php';
    
    $id = $_GET['id'] ?? 0;
    $tarefaOriginal = buscarTarefa($conexao,$id);

    if($tarefaOriginal){
        $tarefaCopia = [
            'nome'       => $tarefaOriginal['nome'],
            'descricao'  => $tarefaOriginal['descricao'],
            'prazo'      => $tarefaOriginal['prazo'],
            'prioridade' => $tarefaOriginal['prioridade'],
            'concluida'  => 0
        ];
        duplicarTarefa($conexao,$tarefaCopia);
        header('Location: tarefas.php');
        die();
    }
    require 'template.php';
?>