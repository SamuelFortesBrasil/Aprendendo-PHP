<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo.css">
    <title>Reajuste com Porcentagem</title>
</head>
<body>
    <?php  
        $porcentagem = $_GET["porc"] ?? 0;
        $valorProduto = $_GET["produto"] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <h1>Reajuste de Produtos</h1>
                <label for="produto">Informe o valor de um produto:</label>
                <input type="number" min="0" step="0.01" id="produto" name="produto" value="<?= $valorProduto ?>">
                <label for="porc">O valor do Reajuste é de <span id="p">1</span>%</label>
                <input type="range" min="1" max="100" value="1" id="porc" name="porc">
                <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
            <h2>Resultado do Reajuste</h2>
            <?php 
                $caclReaj = ($valorProduto * $porcentagem) / 100;
                $reajustado = $valorProduto + $caclReaj;
                echo "O produto que custava $valorProduto, passou a custar $reajustado com o reajuste de $porcentagem %";
            ?>
    </section>
    <script>
        const range = document.getElementById('porc');
        const p = document.getElementById('p');
        range.addEventListener('input',()=>{
            p.innerText = range.value
        })
    </script>
</body>
</html>