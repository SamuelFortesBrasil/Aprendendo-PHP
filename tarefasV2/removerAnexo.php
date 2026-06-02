<?php
    include "banco.php";
    //Lembrando, temos a função buscarAnexos, no plural, precisamos da do singular buscarAnexo
    $anexo = buscarAnexo($conexao,$_GET['id']);
    if(!is_array($anexo)){
        http_response_code(404);
        echo "Anexo não encontrado";
        die();
    }

    removerAnexo($conexao,$anexo['id']);
    unlink('anexos/' . $anexo['arquivo']);
    header('Location: tarefa.php?id=' . $anexo['idTarefa']);

?>