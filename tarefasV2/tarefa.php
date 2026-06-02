<?php 
    include 'banco.php';
    include 'ajudantes.php';
    $tarefa = buscarTarefa($conexao,$_GET['id']);
    if(!is_array($tarefa)){
        http_response_code(404);
        echo "Tarefa não encontrada!";
        die();
    }

    $temErros = false;
    $errosValidacao = [];



    if(temPost()){
        //Upload dos arquivos
        $tarefaID = $_POST['tarefaID']; //De onde vem esse $_POST ? 
        if(!array_key_exists('anexo',$_FILES)){
            $temErros = true;
            $errosValidacao['anexo'] = 'Você deve selecionar um arquivo para anexar';
        }else{
            if(tratarAnexo($_FILES['anexo'])){
                $nome = $_FILES['anexo']['name'];
                $anexo = [
                    'tarefaID' => $tarefaID,
                    'nome' => substr($nome,0,-4),
                    'arquivo' => $nome
                ];// Cria um array para gravar os indices no SQL
            }else{
                $temErros = true;
                $errosValidacao['anexo'] = 'Envie anexos nos formatos PDF ou ZIP';
            }
            if(!$temErros){
                gravarAnexo($conexao,$anexo);//O array anexo vem para cá como parâmetro
                header("Location: tarefa.php?id={$tarefaID}");
                die();
            }
        }
    }

    $anexos = buscarAnexos($conexao,$_GET['id'] );//Aqui busca no SQL se há anexos relacionados a tarefa
    include "templateTarefa.php";
?>