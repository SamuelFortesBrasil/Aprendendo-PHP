<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        $n = (float) 43;
        var_dump($n);
        $verdade = true;
        $falso = false;
        echo "Valor $verdade";
        echo "Valor $falso";
        $vetor = [6,5,3,2,1];
        var_dump($vetor);
        class Pessoa {
           private String $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>

</body>
</html>