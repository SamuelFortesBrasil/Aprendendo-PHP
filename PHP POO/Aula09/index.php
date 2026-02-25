<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $pessoa = new Pessoa("Samuel", 17, "masculino");
            $livro = new Livro("Estudo em Vermelho","Arthur Conyan", 168, $pessoa);
            
            $livro ->abrir();
            $livro ->folhear();
            $livro ->detalhes();
            $livro ->getPagAtual();
            
        ?>
    </body>
</html>
