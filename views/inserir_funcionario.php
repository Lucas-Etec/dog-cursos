<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo funcionário</h1>
    <form method="post" action="processa_funcionario.php">
        <label class="badge text-bg-secondary" for="nome_funcionario">Nome funcionário:</label>
        <input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionário">
        <br>
        <div>
            <p style="margin: 0;" class="badge text-bg-secondary">Selecione um cargo</p>
            <br>
            <select name="escolha_cargo" id="escolha_cargo">
                <option>Selecione um cargo</option>
                <?php
                while ($linha = mysqli_fetch_array($consulta_cargos)) {
                    echo '<option value="' . $linha['id_cargo'] . '">' . $linha['nome_cargo'] . '</option>';
                }
                ?>
            </select>
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Inserir funcionário">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_funcionarios)) { ?>
        <?php if ($linha['id_funcionario'] == $_GET['editar']) { ?>
            <h1>Editar funcionário</h1>
            <form method="post" action="edita_funcionario.php">
                <input type="hidden" name="id_funcionario" value="<?= $linha['id_funcionario'] ?>">
                <label class="badge text-bg-secondary" for="nome_funcionario">Nome funcionário:</label>
                <input class="form-control" type="text" name="nome_funcionario" placeholder="Insira o nome do funcionário" value="<?= $linha['nome_funcionario'] ?>">
                <br>
                <p style="margin: 0;" class="badge text-bg-secondary">Selecione um cargo</p>
                <br>
                <select name="escolha_cargo" id="escolha_cargo">
                    <option>Selecione um cargo</option>
                    <?php
                    while ($linhaCargo = mysqli_fetch_array($consulta_cargos)) {
                        $selected = "";
                        if ($linhaCargo['id_cargo'] == $linha['cargo']) {
                            
                            $selected = "selected";
                        }
                        
                        echo '<option ' . $selected . ' value="' . $linhaCargo['id_cargo'] . '">' . $linhaCargo['nome_cargo'] . '</option>';
                        echo '<p>'. $linhaCargo['id_cargo'] . $linhaCargo['nome_cargo'] . '</p>';
                    }
                    ?>
                    </select>
                    <br>
                    <br>
                    <input class="btn btn-success" type="submit" value="Salvar funcionário">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>