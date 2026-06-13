<?php
    require 'banco.php';
    require 'ajudantes.php';
    $exibirTabela = false;
    $exibirFavoritos = true;
    $listaFavoritos = buscarFavoritos($conexao);

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