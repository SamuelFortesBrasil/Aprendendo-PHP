<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando um CPF</title>
</head>
<body>
    <h1 style="text-align: center;">Analisando um CPF</h1>
    <form style="width: 40%; margin: auto;">
        <fieldset>
            <legend>Digite um cpf abaixo</legend>
            <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx">
            <input type="submit" value="Analisar">
        </fieldset>
    </form>
    <?php
        $cpf = $_GET['cpf'] ?? '';
        $regex = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";
        
        function Validar($c,$r){
            if(preg_match($r,$c)){
                echo "<p style = \"text-align: center; color: green;\">O cpf digitado é válido!</p>";
            }else{
                echo "<p style = \"text-align: center; color: red\">O valor digitado é inválido!</p>";
            }
        }

        if(array_key_exists('cpf',$_GET)){
            Validar($cpf,$regex);
        }
    ?>
</body>
</html>