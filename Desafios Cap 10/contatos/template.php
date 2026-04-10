
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Gerenciador</title>
</head>
<body>
    <h1>Cadastro de Contatos</h1>
    <form >
        <fieldset>
            <legend>Novo Contato</legend>
            <input type="hidden" id="id" name="id" value="<?= $contato['id'] ?>">
            <label for="nome">nome: </label>
<!--Adicionando Função PHP para o Erro de Nomes-->
            <?php if(array_key_exists('nome',$listaErros)):?>
                <span class="erro"><?= $listaErros['nome']?></span>
            <?php endif;?>
            <input type="text" id="nome" name="nome" value="<?= $contato['nome'] ?>">
            <label for="tel">telefone: </label>
<!--Adicionando uma função PHP para Inválidar telefones-->
            <?php if(!ValidarTelefone($contato['telefone'])):?>
                <span class="erro"><?= $listaErros['telefone']?></span>
            <?php endif;?>
            <input type="text" id="telefone" name='telefone' value="<?= $contato['telefone'] ?>" placeholder="(xx) xxxxx-xxxx">
            <label for="email">email:</label>
<!--Adicionando função PHP para validar e-mail-->
            <?php if(!ValidarEmail($contato['email'])):?>
                <span class ="erro"><?= $listaErros['email'] ?></span>
            <?php endif;?>    
            <input type="text" id="email" name="email" value="<?= $contato['email'] ?>" placeholder="exemple@service.com">
            <label for="nasc">Data de Nascimento: </label>
<!--Adicionando função PHP para validar a data de nascimento-->
            <?php if(array_key_exists('nascimento',$listaErros)):?>
                <span class="erro"><?= $listaErros['nascimento'] ?></span>
            <?php endif;?>
            <input type="date" id="nasc" name="nascimento" value="<?= $contato['nascimento'] ?>" required>
            <label >Favoritar <input type="checkbox" name="favorito" value="0" <?= ($contato['favorito']) == 1 ? 'checked': '' ?>></label>
            <input type="submit"  id="Cadastrar" value="<?= $exibirTabela ? 'Cadastrar': 'Salvar' ?>">
            <?php if(!$exibirTabela){
                echo '<a href = "contatos.php" id= "cancelar" class = "bt-auxiliares">Cancelar</a>';
            }?>
        </fieldset>
    </form>
    <?php if($exibirTabela):?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>email</th>
            <th>Nascimento</th>
            <th>Favorito</th>
            <th>Opções</th>
        </tr>
        <?php foreach ($listaContatos as $contato): ?>
            <tr>
                <td><?php echo $contato['nome'];?></td>
                <td><?php echo $contato['telefone'] ?? 'Não Informado';?></td>
                <td><?php echo $contato['email'] ?? 'Não Informado';?></td>
                <td><?php echo dataParaExibir($contato['nascimento']);?></td>
                <td><?php echo $contato['favorito'] ? 'sim' : 'não';?></td>
                <td>
                  <a href="editar.php?id=<?=$contato['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                  <a href="remover.php?id=<?= $contato['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="favoritos.php" id="bt-favoritos" class="bt-auxiliares">Exibir Favoritos</a>
    <?php endif;?>
    <?php if(!$exibirTabela && $exibirFavoritos):?>
        <table>
           <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>email</th>
            <th>Nascimento</th>
            <th>Favorito</th>
         </tr>
        <?php foreach ($listaFavoritos as $favorito): ?>
            <tr>
                <td><?php echo $favorito['nome'];?></td>
                <td><?php echo $favorito['telefone'] ?? 'Não Informado';?></td>
                <td><?php echo $favorito['email'] ?? 'Não Informado';?></td>
                <td><?php echo dataParaExibir($favorito['nascimento']);?></td>
                <td><?php echo $favorito['favorito'] = 'sim';?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        <a href="contatos.php" class="bt-auxiliares">Exibir Todos</a>
    <?php endif;?>
</body>
</html>