<?php
    $usuario = 'sistemaContatos';
    $senha = '13!#PtwS@';
    $banco = 'contatos';
    $endereco = 'localhost';

    $conexao = mysqli_connect($endereco,$usuario,$senha,$banco);

    if(!$conexao){
        echo "Não foi possivel se conectar ao banco de dados: " . mysqli_connect_error();
        die();
    }

    function buscarContatos($conexao){
        $comandoSQL = "SELECT * FROM contatos";
        $resultado = mysqli_query($conexao,$comandoSQL);
        $contatos = [];
        while($contato = mysqli_fetch_assoc($resultado)){
            $contatos[] = $contato;
        }
        return $contatos;
    }

    function gravarContato($conexao,$contato){
        if($contato['nascimento'] == ""){
            $nasc = 'NULL';
        }else{
            $nasc = "'{$contato['nascimento']}'";
        }
        $gravarSQL = "INSERT INTO contatos (nome,telefone,email,nascimento,favorito) VALUES 
        (
            '{$contato['nome']}',
            '{$contato['telefone']}',
            '{$contato['email']}',
            {$nasc},
            '{$contato['favorito']}'
        )";
        mysqli_query($conexao,$gravarSQL);
    }

?>