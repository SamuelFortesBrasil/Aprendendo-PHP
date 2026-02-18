<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
    
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número digitado <strong>".number_format($num,3,",",".")."</strong> </p>";

            $inteira = (int)$num ;
            $frac = $num - $inteira;
            echo "<ul>
                    <li>A parte inteira é $inteira</li>
                    <li>A parte fracionada é $frac</li>
                 </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>