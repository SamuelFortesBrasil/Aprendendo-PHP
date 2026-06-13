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

    function buscarContato($conexao,$id){
        $buscar = "SELECT * FROM contatos WHERE id = {$id}";
        $resultado = mysqli_query($conexao,$buscar);
        return mysqli_fetch_assoc($resultado);
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

    function editarContato($conexao,$contato){
         if($contato['nascimento'] == ""){
            $nasc = 'NULL';
        }else{
            $nasc = "'{$contato['nascimento']}'";
        }
        $editarSQL = "UPDATE contatos SET
        
            nome = '{$contato['nome']}',
            telefone = '{$contato['telefone']}',
            email = '{$contato['email']}',
            nascimento = {$nasc},
            favorito = '{$contato['favorito']}'
            WHERE id = {$contato['id']}
        ";
        mysqli_query($conexao,$editarSQL);
    }

    function removerContato($conexao,$id){
        $sqlRemover = "DELETE FROM contatos WHERE id = {$id}";
        mysqli_query($conexao,$sqlRemover);
    }

    function buscarFavoritos($conexao){
        $FavoritosSQL = "SELECT * FROM contatos WHERE favorito = 1";
        $resultado = mysqli_query($conexao,$FavoritosSQL);
        $favoritos = [];
        while($favorito = mysqli_fetch_assoc($resultado)){
            $favoritos[] = $favorito;
        }
        return $favoritos;
    }
    
    //Necessário no banco de dados das fotos as colunas : ID (primary), IDContato(estrangeira), nomeFoto (sem extensão), arquivo (nome + extensão) -> isso tudo está feito.


    //A função abaixo deve buscar o caminho de uma foto no sql
    //Basicamente ela seleciona tudo onde o id contatos for = ao $_GET que for passado
    //Esse get virando $contatoID, é claro.
    function buscarFoto($conexao,$contatoID){
        $buscar = "SELECT * FROM fotos WHERE idContato = {$contatoID}";
        $resultado = mysqli_query($conexao,$buscar);
        return mysqli_fetch_assoc($resultado);
    }

    //função de gravar o caminho e dados da foto efetivamente.
    function gravarFoto($conexao,$foto){
        $gravarSQL = "INSERT INTO fotos(idContato,nomeFoto,arquivo) VALUES(
            {$foto['contatoID']},
            '{$foto['nome']}',
            '{$foto['arquivo']}'
        )";
        mysqli_query($conexao,$gravarSQL);
    }

    //Não havia feito, porém agora está feito
    function removerFoto($conexao,$id){
        $removerSQL = "DELETE FROM fotos WHERE idContato = {$id}";
        mysqli_query($conexao,$removerSQL);
    }
?>