<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
      <h1>Gerenciador de Tarefas</h1>
    <form >
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Tarefa: </label>
            <input type="text" id="nome" name="nome">
            <label for="descricao">Descrição (Opicional): </label>
            <textarea name="descricao" id="descricao"></textarea>
            <label for="prazo">Prazo (Opicional):</label>
            <input type="date" name="prazo"  required>
            <fieldset>
                <legend>Prioridade: </legend>
                <label>
                    Baixa<input type="radio" name="prioridade" id="baixa" value="1">
                    Média<input type="radio" name="prioridade" id="media" value="2">
                    Alta<input type="radio" name="prioridade" id="alta" value="3">
                </label>
            </fieldset>
            <label for="concluida">Tarefa concluída: 
                <input type="checkbox" name="concluida" id="concluida" value="1">
            </label>
            <input type="submit" id="Cadastrar" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
            <th>Opções</th>
        </tr>
            <?php foreach($lista_tarefas as $tarefa):?>
                <tr>
                    <td><?php echo $tarefa['nome'];?></td>
                    <td><?php echo $tarefa['descricao'] ?? 'Nenhuma';?></td>
                    <td><?php echo dataParaExibir($tarefa['prazo']);?></td>
                    <td><?php echo traduzirPrioridade($tarefa['prioridade']);?></td>
                    <td><?php echo $tarefa['concluida'] ? 'sim' : 'não';?></td>
                    <td><a href="editar.php?id=<?=$tarefa['id'] ?>?>">editar</a></td>
                </tr>
            <?php endforeach;?>
    </table>
</body>
</html>