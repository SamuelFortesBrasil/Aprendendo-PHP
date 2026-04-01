<?php 
    session_start();
    require 'banco.php';
    require 'ajudantes.php';
    
    $exibirTabela = false;

    if(array_key_exists('nome',$_GET) && $_GET['nome'] != ''){
        $contato = [];
        $contato = [
            'id' => $_GET['id'],
            'nome' => $_GET['nome'],
            'telefone' => $_GET['telefone'] ?? 'Não Informado',
            'email' => $_GET['email'] ?? 'Não Informado',
            'nascimento' => dataParaBanco($_GET['nascimento']),
            'favorito' => ''
        ];

        if(array_key_exists('favorito',$_GET)){
            $contato['favorito'] = 1;
        }else{
            $contato['favorito'] = 0;
        }
        editarContato($conexao,$contato);
        header('Location: contatos.php');
        die();
    }

    $contato = buscarContato($conexao,$_GET['id']);

    require 'template.php';

?>