<?php
    session_start();
    require_once "banco.php";
    require "ajudantes.php";
    
    $exibirTabela = true;
    $temErros = false;
    $listaErros = [];

    
        $tarefa = [
           'id' => 0,
           'nome' => '',
           'descricao' => '',
           'prazo' => '',
           'prioridade' => 1,
           'concluida' => ''
    
        ];

    if(temPost()){
        $tarefa = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'] ?? 'Nada Informado',
            'prioridade' => $_POST['prioridade'],
            'prazo' => $_POST['prazo'],
            'concluida' => $_POST['concluida'] ?? 0
        ];

        if(strlen($tarefa['nome']) == 0){
            $temErros = true;
            $listaErros['nome'] = 'É necessário adicionar um nome!';
        }
        if(!$temErros){
            gravarTarefa($conexao,$tarefa);
            header('Location: tarefas.php');
            die();
         }
     }


   $lista_tarefas = buscar_tarefas($conexao);
   require 'template.php';
  ?>
