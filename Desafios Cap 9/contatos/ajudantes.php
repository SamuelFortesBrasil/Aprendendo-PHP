<?php
    function dataParaBanco($data){
        if($data == ''){
            return '';
        }
        return $data;
    }

    function dataParaExibir($data){
        if($data == '' || $data == '0000-00-00' || $data == 'Não Informada'){
            return '';
        }

        $dados = explode('-',$data);
        $datafinal = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

        return $datafinal;
    }


?>