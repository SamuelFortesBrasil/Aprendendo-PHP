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

    function calendario($diaInicio,$quantiaDias){
        $calendario = '';
        $dia = 1;
        $semana = [];

        for($i = 0; $i < $diaInicio;$i++){
            $semana[$i] = '';
        }

        while($dia <= $quantiaDias){
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

    $diasDosMeses = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $nomesMeses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho","Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    $diaSemanaAtual = 4;



?>

<?php
    for($i = 0;$i < 12; $i++){
        echo "<h3>{$nomesMeses[$i]}</h3>";
    
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
    <?php 
        echo calendario($diaSemanaAtual,$diasDosMeses[$i]);
        $diaSemanaAtual = ($diaSemanaAtual + $diasDosMeses[$i]) % 7;
     ?>
</table>
<?php }?>

