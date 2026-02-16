<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
<!--5,24 dolar vale isso em 16/02/2026-->
<main>
    <h1>Unidade convertida</h1>
      <?php 
            $valorReal = $_GET["valor"] ?? 0;
            $dolar = 5.24; 
            $calc = $valorReal / $dolar;
            echo "Com R$ $valorReal reais você terá USD ". number_format($calc,2,",",".")

      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>