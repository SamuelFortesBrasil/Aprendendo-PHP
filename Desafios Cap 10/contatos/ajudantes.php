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

    function ValidarTelefone($telefone){
        $regex = "/^\([0-9]{2}\)\s?[0-9]{5}\-[0-9]{4}$/";
        if(!preg_match($regex,$telefone) && $telefone != ''){
            return false;
        }else{
            return true;
        }
    }

    function ValidarEmail($email){
        $regex = "/^([a-z]|[0-9]){1,20}\@[a-z]{1,8}\.[a-z]{3}$/";
        if(!preg_match($regex,$email) && $email != ''){
            return false;
        }else{
            return true;
        }
    }
    
    function ValidarData($data){
        //Submeter a data a 3 tipos de validação. 1 - campo vazio , 2- data menor que ano atual 
        //e maior que 1930 , 3- checkdate 
        $dadosData = explode('-',$data);
        if(count($dadosData)!= 3){
            return false;
        }
         $checagem = checkdate($dadosData[1],$dadosData[2],$dadosData[0]);
         $date =  date('Y');
        if(!$checagem){
            return false;
        }elseif($dadosData[0] >= $date || $dadosData[0] <= 1930){
            return false;
        }else{
            return true;
        }
    }


    //Regex para verificar um email: /^([a-z]|[0-9]){1,20}\@[a-z]{1,8}\.[a-z]{3}$/
?>