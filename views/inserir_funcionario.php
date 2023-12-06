<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo funcionario</h1>
    <form method="post" action="processa_funcionario.php">
        <label class="badge text-bg-secondary" for="nome_funcionario">Nome funcionario:</label>
        <input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionario">
        <div>
            <p class="badge text-bg-secondary">Selecione</p>
            <select name="escolha_cargo" id="escolha_cargo">
                <option>Selecione um cargo</option>
                <?php
                while ($linha = mysqli_fetch_array($consulta_cargos)) {
                    echo '<option value="' . $linha['id_cargo'] . '">' . $linha['nome_cargo'] . '</option>';
                }
                ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Inserir funcionario">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_funcionarios)) { ?>
        <?php if ($linha['id_funcionario'] == $_GET['editar']) { ?>
            <h1>Editar funcionario</h1>
            <form method="post" action="edita_funcionario.php">
                <input type="hidden" name="id_funcionario" value="<?= $linha['id_funcionario'] ?>">
                <label class="badge text-bg-secondary" for="nome_funcionario">Nome funcionario:</label>
                <input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionario" value="<?= $linha['nome_funcionario'] ?>">
                <p class="badge text-bg-secondary">Selecione</p>
            <select name="escolha_cargo" id="escolha_cargo">
                <option>Selecione um cargo</option>
                <?php
                while ($linha = mysqli_fetch_array($consulta_cargos)) {
                    echo '<option value="' . $linha['id_cargo'] . '">' . $linha['nome_cargo'] . '</option>';
                    echo '<p>'. $linha['id_cargo'] . $linha['nome_cargo'] . '</p>';
                }
                ?>
                <p>asfdasfasdf dsa fadsgfsdg afdsgfg sdfgdfsgfdsgf agasdfrdsadasdsdsd</p>
                <input class="btn btn-success" type="submit" value="Salvar funcionario">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>