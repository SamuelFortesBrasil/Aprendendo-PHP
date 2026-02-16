<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas com API</title>
</head>
<body>

<main>
    <h1>Unidade convertida</h1>
      <?php 

            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y") ;

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $valorReal = $_GET["valor"] ?? 0;
            //$dolar = 5.24; 
            $calc = $valorReal / $cotacao;
            echo "Com R$ $valorReal reais você terá USD ". number_format($calc,2,",",".")

      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>