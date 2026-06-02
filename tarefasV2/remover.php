<?php 
    require 'banco.php';
    removerTarefa($conexao,$_GET['id']);
    header('Location: tarefas.php');
    die();
?>