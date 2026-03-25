 <?php
    session_start();
    require "banco.php";
    require "ajudantes.php";

    $lista_tarefas = buscar_tarefas($conexao);

    if(array_key_exists('nome',$_GET) && $_GET['nome'] != ''){
        $tarefa = [];
        $tarefa['nome'] = $_GET['nome'];

        if(array_key_exists('descricao',$_GET)){
            $tarefa['descricao'] = $_GET['descricao'] ?? '';
        }

        if(array_key_exists('prazo',$_GET)){
            $tarefa['prazo'] = $_GET['prazo'];
        }
        
        $tarefa['prioridade'] = $_GET['prioridade'] ?? 'Não Definida';

        if(array_key_exists('concluida',$_GET)){
            $tarefa['concluida'] = 1;
        }else{
            $tarefa['concluida'] = 0;
        }

        gravarTarefa($conexao,$tarefa);

     }


     require 'template.php';
  ?>
