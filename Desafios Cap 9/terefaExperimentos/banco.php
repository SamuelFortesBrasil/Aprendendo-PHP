<?php

$servidor = 'localhost';
$usuario = 'sistematarefas';
$senha = '!#17YbT8@?';
$banco = 'tarefas';

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);


if(!$conexao){
    echo "Problemas ao se conectar ao banco. Erro: ";
    echo mysqli_connect_error();
    die();
    
}

function buscar_tarefas($conexao){
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao,$sqlBusca);
    $tarefas = [];
    while($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function buscarTarefa($conexao,$id){
    $buscarSQL = 'SELECT * FROM tarefas WHERE' . $id;
    $resultado = mysqli_query($conexao,$buscarSQL);
    return mysqli_fetch_assoc($resultado);
}

function editarTarefa($conexao,$tarefa){
    if($tarefa['prazo'] == ''){
        $prazo = 'NULL';
    }else{
        $prazo = "'{$tarefa['prazo']}'";
    }

    $sqlEditar = "UPDATE tarefas SET 
        nome = '{$tarefa['nome']}',
        descricao = '{$tarefa['descricao']}',
        prioridade = '{$tarefa['prioridade']}',
        prazo = {$prazo},
        concluida = '{$tarefa['concluida']}'
        WHERE id  = {$tarefa['id']}
    ";

    mysqli_query($conexao,$sqlEditar);
}

function gravarTarefa($conexao,$tarefa){
    if($tarefa['prazo'] == ''){
        $prazo = 'NULL';
    }else{
        $prazo = "'{$tarefa['prazo']}'";
    }

    $sqlGravar = "
        INSERT INTO tarefas
        (nome,descricao,prioridade,prazo,concluida)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}',
            {$prazo},
            '{$tarefa['concluida']}'
        )
    ";
    mysqli_query($conexao,$sqlGravar);
}

function removerTarefa($conexao,$id){
    $sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
    mysqli_query($conexao,$sqlRemover);
}

?>