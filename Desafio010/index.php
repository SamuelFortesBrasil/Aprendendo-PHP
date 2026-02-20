<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Calculando Idade</title>
</head>
<body>
    <?php 
        $anoAtual = date("Y");
        $nascimento = $_GET["nas"] ?? 2000;
    ?>
    <main>
        <h1>Calculando Idades</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="nas">Digite o ano que você nasceu</label>
            <input type="number" id="nas" name="nas" min="1900" max="<?= $anoAtual ?>"  value="<?= $nascimento ?>">
            <label for="ano">Quer saber sua idade em qual ano ? Atualmente estamos em <strong><?= $anoAtual ?></strong></label>
            <input type="number" min="1901" id="ano" name="ano" value="<?= $anoAtual ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Com base nas informações fornecidas</p>
        <?php 
            $anoEscolhido = $_GET["ano"] ?? $anoAtual;
            $calc = $anoEscolhido - $nascimento;
            echo "Você tem <strong>$calc</strong> anos de idade em $anoEscolhido!";
        ?>
    </section>
</body>
</html>