<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Cálculo de Raiz quadrada</title>
</head>
<body>
    <?php 
        $num = $_GET["n"] ?? 0;
    ?>
        <main>
            <h1>Informe um Número</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="n">Número</label>
                <input type="number" id="n" name="n" min="0" value="<?= $num ?>">
                <input type="submit" value="Calcular Raízes">
            </form>
        </main>
        <section>
            <h2>Resultado Final</h2>
            <?php 
                $quadrada = sqrt($num);
                $cubica = pow($num,1/3);
                echo "Analisando o número <strong>$num</strong>:";
                echo"<p>A raiz quadrada é <strong>$quadrada</strong></p>";
                echo"<p>A raiz cubica é <strong>$cubica</strong></p>";
            ?>
        </section>
</body>
</html>