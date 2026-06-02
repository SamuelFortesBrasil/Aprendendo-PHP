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

    function temPost(){
         return count($_POST) > 0;
     }

    function tratarAnexo($anexo){
        $regex = '/\.(pdf|zip)$/';
        $retorno = preg_match($regex,$anexo['name']);
        if($retorno === 0){
            return false;
        }
        move_uploaded_file(
            $anexo['tmp_name'],
            "anexos/{$anexo['name']}"
        );
        return true;
    }
?>