<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Cálculo de Salário</title>
</head>
<body>
    <?php 
        $salario= $_GET["salario"] ?? 1380;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario"  min="1380" value="<?= $salario ?>">
            <p>Considerando o salário mínimo <strong>R$ 1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
            <h2>Resultado Final</h2>
            <?php 
                $min = 1380;
                $frac = (int)($salario / $min);
                $resto = $salario % $min;
                echo "<p>Quem recebe o salário de $salario,00 ganha ".$frac." salários mínimos + R$ $resto,00</p>";
            ?>
    </section>
</body>
</html>