<!-- 4. Exiba os domingos em vermelho e os sábados em negrito.
Pesquise um pouco sobre cores em CSS. -->

<?php
    function gerarLinha($semana){
        $linha = '<tr>';
        for ($i = 0; $i <= 6;$i++){
            if(array_key_exists($i,$semana)){
                if($i == 0){
                    $linha .= "<td style=\"border: 1px solid black; padding: 5px ; color: green;\">{$semana[$i]}</td>";
                }else if($i == 6){
                    $linha .= "<td style=\"border: 1px solid black; padding: 5px ;\"><strong>{$semana[$i]}</strong></td>";
                }else{
                    $linha .= "<td style=\"border: 1px solid black; padding: 5px ;\">{$semana[$i]}</td>";
                }
            }else{
                $linha .= "<td></td>";
            }
        }
        $linha .= '</tr>';
        return $linha;
    }

    function calendario(){
        $calendario = '';
        $dia = 1;
        $semana = [];

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

