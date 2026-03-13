<?php
    echo 'Hoje é ' . date('D') . '<br>';
    $sabado = 6;
    $diaAtual = date('w');
    $quantia = $sabado - $diaAtual;
    echo "Faltam $quantia dias para Sábado!";
?>