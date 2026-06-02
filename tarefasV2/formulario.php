    <form method="POST" >
        <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Tarefa: 
                <?php if($temErros && array_key_exists('nome',$listaErros)):?>
                    <span class="erros">
                        <?php echo $listaErros['nome']?>
                    </span>
                <?php endif;?>
            </label>
            <input type="text" id="nome" name="nome" value="<?=$tarefa['nome']  ?>">
            <label for="descricao">Descrição (Opicional): </label>
            <textarea name="descricao" id="descricao"><?= $tarefa['descricao'] ?></textarea>
            <label for="prazo">Prazo (Opicional):</label>
            <input type="date" name="prazo" value="<?= $tarefa['prazo'] ?>" required>
            <fieldset>
                <legend>Prioridade: </legend>
                <label>
                    Baixa<input type="radio" name="prioridade" id="baixa" value="1" <?= ($tarefa['prioridade'] == 1)?'checked': '' ?>>
                    Média<input type="radio" name="prioridade" id="media" value="2" <?= ($tarefa['prioridade'] == 2)?'checked':'' ?>>
                    Alta<input type="radio" name="prioridade" id="alta" value="3" <?= ($tarefa['prioridade'] == 3)?'checked':'' ?>>
                </label>
            </fieldset>
            <label for="concluida">Tarefa concluída: 
                <input type="checkbox" name="concluida" id="concluida" value="1" <?= ($tarefa['concluida'] == 1)?'checked': ''?>>
            </label>
            <input type="submit" id="Cadastrar" value="<?= ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
        </fieldset>
    </form>