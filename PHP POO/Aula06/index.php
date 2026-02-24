<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 06 de PHP POO</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once 'Controle.php';
            
            $c = new Controle();
            $c ->ligar();
            $c->maisVolume();
            $c ->abrirMenu();
        ?>
    </body>
</html>
