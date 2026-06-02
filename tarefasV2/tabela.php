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
                    <td><a href="tarefa.php?id=<?=$tarefa['id']?>"><?=$tarefa['nome']?></a></td>
                    <td><?php echo $tarefa['descricao'] ?? 'Nenhuma';?></td>
                    <td><?php echo dataParaExibir($tarefa['prazo']);?></td>
                    <td><?php echo traduzirPrioridade($tarefa['prioridade']);?></td>
                    <td><?php echo $tarefa['concluida'] ? 'sim' : 'não';?></td>
                    <td>
                      <a href="editar.php?id=<?=$tarefa['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                      <a href="remover.php?id=<?= $tarefa['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
    </table>