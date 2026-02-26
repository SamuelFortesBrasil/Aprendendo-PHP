<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre> 
        <?php
        
        require_once 'Visitante.php';
        require_once 'Professor.php';
        
        
        $visitante = new Visitante();
        $visitante->setNome("Pedro");
        $visitante->setIdade(21);
        $visitante->setSexo("M");
        print_r($visitante);
        
        $professor = new Professor();
        $professor->setNome("Marcelo");
        $professor->setSalario(2800);
        $professor->aumentarSalario(200);
        $professor->setAtuaçao("Química");
        print_r($professor);
        
        
        ?>
    </pre>
    </body>
</html>
