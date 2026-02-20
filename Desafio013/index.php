<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Caixa eletrônico</title>
</head>
<body>
    <?php 
        $saque = $_GET["saque"] ?? 0;
        $resto = $saque;
        $tot100 = floor($resto / 100);
        $resto = $resto % 100;
        $tot50 = floor($resto / 50);
        $resto = $resto % 50;
        $tot10 = floor($resto / 10);
        $resto %= 10;
        $tot5 = floor($resto / 5);
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="saque">Qual valor você deseja sacar ?(R$)</label>
            <input type="number" min="5" value="<?= $saque ?>" step="5" name="saque" id="saque" required>
            <p>*Notas disponíveis R$100,R$50,R$10,R$5</p>
            <input type="submit" value="sacar">
        </form>
        <section>
            <h2>Saque de R$ <?= $saque ?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="nota 100 reais" class="nota"> x <?= $tot100 ?></li>
                <li><img src="imagens/50-reais.jpg" alt="nota 50 reais" class="nota"> x <?= $tot50 ?></li>
                <li><img src="imagens/10-reais.jpg" alt="nota 10 reais" class="nota"> x <?= $tot10 ?></li>
                <li><img src="imagens/5-reais.jpg" alt="nota 5 reais" class="nota"> x <?= $tot5?></li>
            </ul>
        </section>
    </main>
</body>
</html>