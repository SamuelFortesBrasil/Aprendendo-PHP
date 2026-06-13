
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador</title>
</head>
<body>
    <h1>Cadastro de Contatos</h1>
    <form >
        <fieldset>
            <legend>Novo Contato</legend>
            <label for="nome">nome: </label>
            <input type="text" id="nome" name="nome">
            <label for="tel">telefone: </label>
            <input type="text" id="tel" name='tel'>
            <label for="email">email:</label>
            <input type="text" id="email" name="email">
            <label for="nasc">Data de Nascimento: </label>
            <input type="date" id="nasc" name="nascimento">
            <label >Favoritar <input type="checkbox" name="favorito" value="0"></label>
            <input type="submit"  id="Cadastrar" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>email</th>
            <th>Nascimento</th>
            <th>Favorito</th>
        </tr>
        <?php foreach ($listaContatos as $contato): ?>
            <tr>
                <td><?php echo $contato['nome'];?></td>
                <td><?php echo $contato['telefone'] ?? 'Não Informado';?></td>
                <td><?php echo $contato['email'] ?? 'Não Informado';?></td>
                <td><?php echo dataParaExibir($contato['nascimento']);?></td>
                <td><?php echo $contato['favorito'] ? 'sim' : 'não';?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>