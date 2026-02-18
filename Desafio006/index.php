<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>A anatomia de uma divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo"  min="0" value="<?= $dividendo ?>">
            <label for="divisor">divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Estrutura de uma Divisão</h2>
        <?php 
            $resul = intdiv($dividendo,$divisor);
            $resto = $dividendo % $divisor;

        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $resul ?></td>
            </tr>
        </table>
    </section>
</body>
</html>