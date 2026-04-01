<?php
    session_start();
    require 'banco.php';
    require 'ajudantes.php';

    $exibirTabela = true;
    $exibirFavoritos = false;
    $listaContatos = buscarContatos($conexao);

    if(array_key_exists('nome',$_GET) && $_GET['nome'] != ''){
        $contato = [];
        $contato = [
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
        gravarContato($conexao,$contato);
        header('Location: contatos.php');
        die();
    }

    $contato = [
        'id'         => 0,
        'nome'       => '',
        'telefone'   => '',
        'email'      => '',
        'nascimento' => '',
        'favorito'   => 0
    ];
    
    require 'template.php';
 ?>