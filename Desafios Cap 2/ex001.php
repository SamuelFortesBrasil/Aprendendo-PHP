<!-- 1. Faça uma página que exiba a hora e a frase "Bom dia", "Boa
tarde" ou "Boa noite", de acordo com a hora. Use a
condicional if e a função date() . -->

<?php
    echo date('H \: i \: s');

    if(date('H') <= 11){
        echo " Bom dia!";
    } else if(date('H') >= 12 && date('H') <= 17){
        echo " Boa tarde!";
    }else if(date('H') >= 18){
        echo " Boa noite!";
    }

?>