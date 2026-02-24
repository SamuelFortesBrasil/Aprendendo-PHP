<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Conta.php';
            
            //Setando a conta do Jubileu
            
            $c1 = new Conta();
            
            $c1 ->setDono("Jubileu");
            $c1 ->setNumConta(12345);
            $c1 ->abrirConta();
            $c1 ->depositar(300);
            $c1 ->pagarMensalidade("CP");
           
            
            print_r($c1);
            
            //Fim do set----------------------
            //Setando a conta da Creuza
            
            $c2 = new Conta();     
            $c2 ->setDono("Creuza");
            $c2 ->setTipo("CC");
            $c2 ->setNumConta(67890);
            $c2 ->abrirConta();
            $c2 ->depositar(500);
            $c2 ->sacar(100);
            $c2 ->pagarMensalidade("CC");
            
            
            print_r($c2);
            
            //Fim do set-----------------------
            
        ?>
        </pre>
    </body>
</html>
