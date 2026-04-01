<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
      <h1>Gerenciador de Tarefas</h1>
     <?php require 'formulario.php';?>
     <?php if($exibirTabela):?>
     <?php require 'tabela.php';?>
     <?php endif;?>
</body>
</html>