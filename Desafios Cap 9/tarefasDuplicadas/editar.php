<?php
    session_start();
    require 'banco.php';
    require 'ajudantes.php';
    $exibirTabela = false;

    if(array_key_exists('nome',$_GET) && $_GET['nome'] != ''){
        $tarefa = [
            'id' => $_GET['id'],
            'nome'=> $_GET['nome'],
            'descricao' => $_GET['descricao'] ?? 'Não Informado',
            'prazo' => $_GET['prazo'],
            'prioridade' => $_GET['prioridade'] ?? 'Não Definida',
            'concluida'=> 0,
        ];

        if(array_key_exists('concluida',$_GET)){
            $tarefa['concluida'] = 1;
        }else{
            $tarefa['concluida'] = 0;
        }

        editarTarefa($conexao,$tarefa);
        header('Location: tarefas.php');
        die();
    }

    $tarefa = buscarTarefa($conexao,$_GET['id']);

    require 'template.php';
?>