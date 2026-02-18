<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Exercício 05 com PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana","TERÇA",time()+3600);

                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);
                echo "<h1>Super Global Cookie</h1>";
                var_dump($_COOKIE);
                echo "<h1>Super Global SERVER</h1>";
                
            ?>
        </pre>
    </main>
</body>
</html>