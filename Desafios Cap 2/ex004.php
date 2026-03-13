<!-- 5 -Faça um calendário que começe em outro dia fora o Domingo-->

<?php
    function gerarLinha($semana){
        $linha = '<tr>';
        for ($i = 0; $i <= 6;$i++){
            if(array_key_exists($i,$semana)){
                $linha .= "<td style=\"border: 1px solid black; padding: 5px ;\">{$semana[$i]}</td>";
            }else{
                $linha .= "<td></td>";
            }
        }
        $linha .= '</tr>';
        return $linha;
    }

    function calendario($diaInicio = 2){
        $calendario = '';
        $dia = 1;
        $semana = [];

        for($i = 0; $i < $diaInicio;$i++){
            $semana[$i] = '';
        }

        while($dia <= 31){
            array_push($semana,$dia);

            if(count($semana) == 7){
                $calendario .= gerarLinha($semana);
                $semana = [];
            }

            $dia++;
        }
        $calendario .= gerarLinha($semana);
        return $calendario;
    }
?>

<table style="border: 1px solid black; padding: 5px ;">
    <tr>
        <th style="border: 1px solid black; padding: 5px ;">Dom</th>
        <th style="border: 1px solid black; padding: 5px ;">Seg</th>
        <th style="border: 1px solid black; padding: 5px ;">Ter</th>
        <th style="border: 1px solid black; padding: 5px ;">Qua</th>
        <th style="border: 1px solid black; padding: 5px ;">Qui</th>
        <th style="border: 1px solid black; padding: 5px ;">Sex</th>
        <th style="border: 1px solid black; padding: 5px ;">Sab</th>
    </tr>
    <?= calendario() ?>
</table>

