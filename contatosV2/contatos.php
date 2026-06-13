<?php
    session_start();
    require 'banco.php';
    require 'ajudantes.php';

    $exibirTabela = true;
    $exibirFavoritos = false;
    $listaContatos = buscarContatos($conexao);
    $erro = false; //Variável de Controle
    $listaErros = []; // Lista que vai receber os erros
//Tentando Validar os campos de Telefone,Nome e Email
    $contato = [
        'id'         => 0,
        'nome'       => '',
        'telefone'   => '',
        'email'      => '',
        'nascimento' => '',
        'favorito'   => 0
    ];

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

        if(strlen($_GET['nome']) < 3){
            $erro = true;
            $listaErros['nome'] = 'É preciso adicionar um nome!';
        }
        //Acima se a quantia de caracteres do campo nome for 0
        //Dispara um erro

        if(!ValidarTelefone($_GET['telefone'])){
            $erro = true;
            $listaErros['telefone'] = 'O número informado é inválido!';
        }
        //Acima se a função de validar telefone retorna false
        //É gerado um novo elementos na lista de erros
        //Abaixo faz a validação de emails
        if(!ValidarEmail($_GET['email'])){
            $erro = true;
            $listaErros['email'] = 'Por favor forneça um email válido';
        }
        //Abaixo faz a validação de nascimento
        //Inclusive se algum pilantra remove o required do html e tenta mandar
        //String vazia para o database
        if(!ValidarData($_GET['nascimento'])){
            $erro = true;
            $listaErros['nascimento'] = 'A data está vazia ou é inválida!';
        }


        if(array_key_exists('favorito',$_GET)){
            $contato['favorito'] = 1;
        }else{
            $contato['favorito'] = 0;
        }
        //Se não houver erros o código abaixo é executado
        if(!$erro){
                gravarContato($conexao,$contato);
                header('Location: contatos.php');
                die();      
         }
    }



    //  gravarContato($conexao,$contato);
    //  header('Location: contatos.php');
    //  die();
    
    require 'template.php';
 ?>