<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando Cep</title>
</head>
<body>
    <h1 style="text-align: center;">Validador de Cep</h1>
    <form style="width: 40%; margin: auto;">
        <fieldset>
            <legend>Digite um Cep</legend>
            <input type="text" name="cep" id="cep" placeholder="xxxxx-xxx" required>
            <input type="submit" value="Enviar para Análise">
        </fieldset>
    </form>
    <?php
        $cep = $_GET['cep'] ?? '';
        $regex = '/^[0-9]{5}\-[0-9]{3}$/'; 

        function anlisar($c,$r){
            if($c != '' && preg_match($r,$c)){
                echo "<p style = \"text-align: center; color: green;\">Seu CEP $c é Valido!</p>";
            }else{
                echo "<p style = \"text-align: center; color: red;\">O valor Digitado é Inválido!</p>";
            }
        }
        if(array_key_exists('cep',$_GET)){
            anlisar($cep,$regex);
        }
    ?>
</body>
</html>