<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            
            $l = array();
            
            $l[0] = new Lutador("Glass Joe","França", 31,"1,63", 61, 3, 99, 1);
            $l[1] = new Lutador("Bear Hugger", "Canadá", 43,"1,80", 105, 8, 2, 4);
            $l[2] = new Lutador("Mr.SandMan","EUA", 33, "1,78", 95, 48, 0, 0);
            $l[3] = new Lutador("King Hippo","desconhecida","???","1,74", 120, 10, 3, 0);
            $l[4] = new Lutador("Super Macho Man","EUA", 35, "1,82", 89, 29, 0, 5);
            $l[5] = new Lutador("Little Mac", "EUA", 28, "1,65", 68, 30, 10, 25);
            
            $l[0] ->apresentar();
            echo"-----------------------------";
            echo"<br>";
            $l[0] ->status();
            echo"-----------------------------";
            $l[1] ->apresentar();
            echo"-----------------------------";
            echo "<br>";
            $l[1] ->status();
            echo "<br>";
            echo"-----------------------------";
            $l[2] ->apresentar();
            echo"-----------------------------";
            echo "<br>";
            $l[2] ->status();
            echo "<br>";
            echo"-----------------------------";
            $l[3] ->apresentar();
            echo"-----------------------------";
            echo "<br>";
            $l[3] ->status();
            echo "<br>";
            echo"-----------------------------";
            $l[4] ->apresentar();
            echo"-----------------------------";
            echo "<br>";
            $l[4] ->status();
            echo "<br>";
            echo"-----------------------------";
            $l[5] ->apresentar();
            echo"-----------------------------";
            echo "<br>";
            $l[5] ->status();
        ?>
    </body>
</html>
