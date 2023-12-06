<?php if (!isset($_GET['editar'])) { ?>

    <h1>Inserir nova matricula</h1>
    <form method="post" action="processa_matricula.php">
        <p class="badge text-bg-secondary">Selecione o aluno</p>
        <select name="escolha_aluno" id="escolha_aluno">
            <option>Selecione um aluno</option>
            <?php
            while ($linha = mysqli_fetch_array($consulta_alunos)) {
                echo '<option value="' . $linha['id_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
            }
            ?>
        </select>

        <p class="badge text-bg-secondary">Selecione</p>
        <select name="escolha_curso" id="escolha_curso">
            <option>Selecione um curso</option>
            <?php
            while ($linha = mysqli_fetch_array($consulta_cursos)) {
                echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
            }
            ?>
        </select>
        <input class="btn btn-success" type="submit" value="Matricular aluno no curso">
    </form>
<?php } else { ?>
    <?php while ($linhaMatricula = mysqli_fetch_array($consulta_matriculas)) { ?>
        <?php if ($linhaMatricula['id_aluno_curso'] == $_GET['editar']) { ?>
            <h1>Editar matricula</h1>
            <form method="post" action="edita_matricula.php">
                <p class="badge text-bg-secondary">Selecione o aluno</p>
                <select name="escolha_aluno" id="escolha_aluno">
                    <option>Selecione um aluno</option>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_alunos)) {
                        $selected = "";
                        if ($linhaMatricula['id_aluno'] == $linha['id_aluno']) {
                            $selected = "selected";
                        }
                        echo '<option ' . $selected . ' value="' . $linha['id_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
                    }
                    ?>
                </select>

                <p class="badge text-bg-secondary">Selecione</p>
                <select name="escolha_curso" id="escolha_curso">
                    <option>Selecione um curso</option>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_cursos)) {
                        $selected = "";
                        if ($linhaMatricula['id_curso'] == $linha['id_curso']) {
                            $selected = "selected";
                        }
                        echo '<option ' . $selected . ' value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
                    }
                    ?>
                </select>
                <input class="btn btn-success" type="submit" value="Salvar Matricula">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>