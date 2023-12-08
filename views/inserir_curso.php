<?php if (!isset($_GET['editar'])) { ?>

    <h1>Inserir novo curso</h1>
    <form method="post" action="processa_curso.php">
        <label class="badge text-bg-secondary" for="nome_curso">Nome curso:</label>
        <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
        <br>
        <div>
            <label class="badge text-bg-secondary" for="carga_horaria">Carga horária</label>
            <input class="form-control" type="text" name="carga_horaria" id="carga_horaria" placeholder="Insira a carga horária">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Inserir Curso">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_cursos)) { ?>
        <?php if ($linha['id_curso'] == $_GET['editar']) { ?>
            <h1>Editar curso</h1>
            <form method="post" action="edita_curso.php">
                <input class="form-control" type="hidden" name="id_curso" value="<?= $linha['id_curso'] ?>">
                <label class="badge text-bg-secondary" for="nome_curso">Nome curso:</label>
                <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?= $linha['nome_curso'] ?>">
                <br>
                <label class="badge text-bg-secondary" for="carga_horaria">Carga horária</label>
                <input class="form-control" type="text" name="carga_horaria" id="carga_horaria" placeholder="Insira a carga horária" value="<?= $linha['carga_horaria'] ?>">                
                <br>
                <input class="btn btn-success" type="submit" value="Salvar curso">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>