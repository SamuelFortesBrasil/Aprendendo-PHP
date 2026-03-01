<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
          require_once 'Mamifero.php';
          require_once 'Reptil.php';
          require_once 'Peixe.php';
          require_once 'Canguru.php';
          require_once 'Tartaruga.php';
          
          $m = new Mamifero();
          $m->setPeso(22.4);
          $m->locomover();
          $m->alimentar();
          
          print_r($m);
          
          $canguru = new Canguru();
          $canguru->locomover();
          
        ?>
        </pre>
    </body>
</html>
