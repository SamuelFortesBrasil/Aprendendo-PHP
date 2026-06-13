<?php
    include "banco.php";
    include "ajudantes.php";
    //echo var_dump($_GET);

    $contato = buscarContato($conexao,$_GET['id']);
    $buscarFoto = buscarFoto($conexao,$_GET['id']);

   // echo var_dump($buscarFoto);

    $erro = false;
    $listaErros = [];


    //Abaixo, um check se o contato existe no data base, caso algum esperto coloque um id
    //Inexistente na url do site.
    if(!is_array($contato)){
        http_response_code(404);
        echo "Contato não localizado!";
        die();
    }

    if($buscarFoto == NULL && count($_POST) > 0){
        $contatoID = $_POST['idContato']; //Esse aqui vem do form do templateContato.php;
       // if(!array_key_exists('foto',$_FILES)){
       //     $erro = true;
      //      $listaErros['foto'] = '*Você deve selecionar uma foto';
      //  }else{
            if(tratarFoto($_FILES["foto"])){
                //Files tem esse "foto" a partir do form do templateContato.php
                $nome = $_FILES['foto']['name'];
                $foto = [
                    'contatoID' => $contatoID,
                    'nome' => substr($nome,0,-4),
                    'arquivo' => $nome
                ];

            }else{
                //Dispara esse erro se clicar no botão submit do form
                $erro = true;
                $listaErros['foto'] = '*Envie uma foto PNG ou JPG'; 
            }
            if(!$erro){
                gravarFoto($conexao,$foto);
                header("Location: contato.php?id={$contatoID}");
                die();
                //Esse bloco todo é o que vai GRAVAR O CAMINHO DO ARQUIVO no banco de dados, executado SE não houver erros
            }
      //  }
    }




    include "templateContato.php";
?>