<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        $Totalsegundos = $_GET["seg"] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <h1>Calculadora de Tempo</h1>
            <label for="seg">digite o tempo em segundo</label>
            <input type="number" id="seg" name="seg" min="0" value="<?= $segundos ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php 
        $sobra = $Totalsegundos;
        $semanas = intdiv($Totalsegundos,604800);
        $sobra = $sobra % 604800;
        $dias = intdiv($sobra,86400);
        $sobra = $sobra % 86400;
        $horas = intdiv($sobra,3600);
        $sobra = $sobra % 3600;
        $min = intdiv($sobra,60);
        $sobra = $sobra % 60;
        $seg = $sobra;

    ?>
    <section>
            <h2>Resultado</h2>
            <?php 
                echo "Com $Totalsegundos segundos temos:
                <ul>   
                    <li>$semanas semanas</li>
                    <li>$dias dias</li>
                    <li>$horas horas</li>     
                    <li>$min minutos</li>
                    <li>$seg segundos</li>
                </ul>"
            ?>
    </section>
</body>
</html>