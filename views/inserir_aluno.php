<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo aluno</h1>
    <form method="post" action="processa_aluno.php">
        <label class="badge text-bg-secondary" for="nome_aluno">Nome aluno:</label>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
        <br>
        <div>
            <label class="badge text-bg-secondary" for="data_nascimento">Data de nascimento</label>
            <input class="form-control" type="text" name="data_nascimento" id="data_nascimento" placeholder="Insira a data de nascimento">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Inserir aluno">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
        <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>
            <h1>Editar aluno</h1>
            <form method="post" action="edita_aluno.php">
                <input type="hidden" name="id_aluno" value="<?= $linha['id_aluno'] ?>">
                <label class="badge text-bg-secondary" for="nome_aluno">Nome aluno:</label>
                <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?= $linha['nome_aluno'] ?>">
                <br>
                <label class="badge text-bg-secondary" for="data_nascimento">Data de nascimento</label>
                <input class="form-control" type="text" name="data_nascimento" id="data_nascimento" placeholder="Insira a data de nascimento" value="<?= $linha['data_nascimento'] ?>">
                <br>
                <input class="btn btn-success" type="submit" value="Salvar aluno">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>