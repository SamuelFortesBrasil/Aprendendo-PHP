<?php 
    include 'banco.php';
    
    $foto = buscarFoto($conexao,$_GET['id']);
    if(!is_array($foto)){
        http_response_code(404);
        echo "imagem não encontrada!";
        echo var_dump($foto);
        die();
    }

    unlink('fotos/'. $foto['arquivo']);
    removerFoto($conexao,$foto['idContato']);
    header('Location: contato.php?id=' . $foto['idContato']);
?>