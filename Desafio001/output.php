<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Sucessor e Antecessor</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["n"];
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;
        echo "<p>O número informado é: $numero</p>";
        echo "<p>Seu sucessor é <strong>$sucessor</strong></p>";
        echo "<p>Seu antecessor é <strong>$antecessor</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
   
</body>
</html>