<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "valor não informado";
            $sobrenome = $_GET["sobrenome"] ?? "valor não informado";
            echo "<p>Bem-Vindo(a) $nome $sobrenome!</p>";
        ?>
        <p><a href="index.html">Voltar para Página anterior</a></p>
    </main>
</body>
</html>