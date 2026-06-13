<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templateContato.css">
    <title>Contato</title>
</head>
<body>
    <h1>Contato Selecionado</h1>
    <div id="divPrincipal">
        <h1><?=$contato['nome']?></h1>
        <?php if($buscarFoto == NULL):?>
            <img class = "foto-perfil" src="fotos/foto-padrao.png" alt="foto de perfil">
        <?php else:?>
        <!--$buscarFoto é a chamada do comando SQL que retorna o caminho da foto-->
            <img class="foto-perfil" src="fotos/<?=$buscarFoto['arquivo']?>" alt="foto de perfil"> 
            <a href="removerFoto.php?id=<?=$buscarFoto['idContato']?>">Remover Foto</a>
        <?php endif;?>
        <p><strong>Telefone:</strong> <?=$contato['telefone']?></p>
        <p><strong>Email:</strong> <?=$contato['email']?></p>
        <p><strong>Favorito:</strong> <?=$contato['favorito']?'sim':'não'?></p>
        <a href="contatos.php">voltar</a>
        <?php if($erro):?>
            <span class = "erroArquivo"><p><?=$listaErros['foto']?></p></span>
        <?php endif;?>
    </div>
        <!--Extra challenge mostrar e ocultar o form-->
        <!--No caso SE não houver foto de perfil, oq é demarcado por NULL, ele mostra o form-->
    <?php if($buscarFoto == NULL):?>
    <form action="" method = "post" enctype = "multipart/form-data">
        <fieldset>
            <legend>Adicione uma foto de perfil</legend>
            <input type="hidden" name = "idContato" id = "idContato" value = "<?=$contato['id']?>">
        <!--Esse form envia um arquivo para a superglobal $_FILES, criando o array bidimensional-->            
    <!--Além disso, envia o input acima, QUE É HIDDEN o qual contém o id DO CONTATO, para ser salvo no SQL-->
            <label for="foto">Procurar uma foto</label>
            <input type="file" name = "foto" id = "foto"><!--Esse input envia para a global $_FILES o arquivo, podendo ser referenciado pelo name "foto"-->
            <input type="submit" value = "Enviar">
        </fieldset>
    </form>
    <?php endif;?>
</body>
</html>