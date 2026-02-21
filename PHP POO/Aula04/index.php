<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            require_once 'Desodorante.php';
            
//            $c1 = new Caneta("NIC","rosa",1);
            $d1 = new Desodorante("azul","pequeno");
            $d1 ->setSpray(false);
            $d1 ->setMarca("Axe");
            print_r($d1);
            
            echo "{$d1->getSpray()}";
            
//            $c1 ->setModelo("BIC");
//            $c1 ->setPonta(0.5);
//            
//            echo "Eu tenho uma caneta {$c1 -> modelo} com a ponta {$c1 ->getPonta()}";
            
        ?>
    </body>
</html>
