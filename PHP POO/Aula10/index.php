<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Aluno();
            $p2 = new Professor();
            $p3 = new Funcionario();
            
            $p1->setNome("Claudio");
            $p2 ->setNome("Maria");
            $p3 ->setNome("Pedro");
            
            $p1->setCurso("Sistemas da Informação");
            $p2->setEspecialidade("Química");
            $p3->setTrabalhando(true);

        ?>
    </body>
</html>
