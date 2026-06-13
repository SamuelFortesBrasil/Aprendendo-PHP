<?php
    session_start();

    require 'banco.php';
    require 'ajudantes.php';

    $listaContatos = buscarContatos($conexao);

    if(array_key_exists('nome',$_GET) && $_GET['nome'] != ''){
        $contato = [];
        $contato = [
            'nome' => $_GET['nome'],
            'telefone' => $_GET['tel'] ?? 'Não Informado',
            'email' => $_GET['email'] ?? 'Não Informado',
            'nascimento' => dataParaBanco($_GET['nascimento']),
            'favorito' => ''
        ];

        if(array_key_exists('favorito',$_GET)){
            $contato['favorito'] = 1;
        }else{
            $contato['favorito'] = 0;
        }
        gravarContato($conexao,$contato);
    }

    require 'template.php';
 ?>