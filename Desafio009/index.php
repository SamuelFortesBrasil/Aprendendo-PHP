<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Cálculos de Média</title>
</head>
<body>
    <?php 
        $nota1 = $_GET["n1"] ?? 0;
        $nota2 = $_GET["n2"] ?? 0;
        $peso1 = $_GET["p1"] ?? 1;
        $peso2 = $_GET["p2"] ?? 1;
    ?>

    <main>
        <h1>Informe os Valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="n1">Primeira Nota</label>
            <input type="number" name="n1" id="n1" value="<?= $nota1 ?>">
            <label for="p1">Primeiro Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $peso1 ?>">
            <label for="n2">Segunda Nota</label>
            <input type="number" name="n2" id="n2" value="<?= $nota2 ?>">
            <label for="p2">Segundo Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
            <h2>Resultados</h2>
            <p>Ao calcular as médias das notas....</p>
            <?php 
                $media = ($nota1 + $nota2) / 2;
                $ponderada = ($nota1 * $peso1 + $nota2 * $peso2 )/ ($peso1 + $peso2);
                echo "<ul>
                        <li>A média aritmética é $media </li>
                        <li>A média ponderada é $ponderada</li>
                </ul>";
            ?>
    </section>
</body>
</html>