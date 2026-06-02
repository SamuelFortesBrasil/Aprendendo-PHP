<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templateTarefa.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <div id ="blocoPrincipal">
        <h1>Tarefa: <?=$tarefa['nome']?></h1>
        <p>
           <a  href="tarefas.php" id='voltar'>
                Voltar para a lista
           </a>
        </p>
        <p>
            <strong>Concluída: </strong>
            <?=$tarefa['concluida']?'Sim':'Não'?>
        </p>
        <p>
            <strong>Descrição: </strong>
            <?= nl2br($tarefa['descricao'])?>
        </p>
        <p>
            <strong>Prazo: </strong>
            <?=dataParaExibir($tarefa['prazo'])?>
        </p>
        <p>
            <strong>Prioridade: </strong>
            <?=traduzirPrioridade($tarefa['prioridade'])?>
        </p>
        <h2>Lista de Anexos</h2>
        <!--Lista de Anexos-->
        <?php if(count($anexos) > 0):?>
        <!--Trecho PHP para exibir os arquivos que estão anexados a tarefa-->
            <table class = "tabelaArquivos">
                <tr>
                    <th>Arquivos</th>
                    <th>Opções</th>
                </tr>
        <!--Acima parte de opções, Download...-->
        <!--Abaixo um iterador que pega o array anexos, que vem de banco.php-->
            <?php foreach($anexos as $anexo):?>
            <!--A cada iteração um elemento traz o nome do anexo, um link para download, tudo encapsulado por uma célula de uma tabela-->
                <tr>
                    <td><?=$anexo['nome']?></td>
                    <td>
                        <a href="anexos/<?=$anexo['arquivo']?>"><i class="bi bi-download botao"></i></a>
                        <a href="removerAnexo.php?id=<?=$anexo['id']?>"><i class="bi bi-x-circle-fill botao"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
        <?php else:?>
            <p>Não há anexos para esta tarefa.</p>
        <?php endif;?>
         </table>
        <!--Formulário que adciona um novo anexo abaixo.-->
        <form action="" method="post" enctype = "multipart/form-data">
            <fieldset>
                <legend>  Novo Anexo</legend>
                <input type="hidden" name='tarefaID' value = "<?=$tarefa['id']?>">
        <!--Aqui envia o id da tarefa para esse formulário, é algo já pronto que vem escondido no form-->
        <!--O input tem o atributo hidden pois o usuário não necessita saber disso.-->
                <label for="anexo">
                    <?php if($temErros && array_key_exists('anexo',$errosValidacao)):?>
                        <span class="erroArquivo">
                            <?=$errosValidacao['anexo']?>
                        </span>
                    <?php endif;?>
                    <input type="file" name="anexo" id="anexo">
                </label>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>

        <!--Formulário de novo anexo-->
    </div>
</body>
</html>