<?php
    session_start();
    require 'banco.php';
    require 'ajudantes.php';
    $exibirTabela = false;
    $temErros = false;

    if(array_key_exists('nome',$_POST) && $_POST['nome'] != ''){
        $tarefa = [
            'id' => $_POST['id'],
            'nome'=> $_POST['nome'],
            'descricao' => $_POST['descricao'] ?? 'Não Informado',
            'prazo' => $_POST['prazo'],
            'prioridade' => $_POST['prioridade'] ?? 'Não Definida',
            'concluida'=> 0,
        ];

        if(array_key_exists('concluida',$_POST)){
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