<?php 
    function traduzirPrioridade($codigo){
        $prioridade = '';

        switch($codigo){
            case 1:
                $prioridade = 'Baixa';
                break;
            case 2:
                $prioridade = 'Média';
                break;
            case 3:
                $prioridade = 'Alta';
                break;
        }
        return $prioridade;
    }



    function dataParaExibir($data){
        if($data == "" || $data == "0000-00-00"){
                return "";
        }

        $dados = DateTime::createFromFormat('Y-m-d',$data);

        return $dados -> format('d/m/Y');
    }
?>