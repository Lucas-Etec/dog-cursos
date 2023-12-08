<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo cargo</h1>
    <form method="post" action="processa_cargo.php">
        <label class="badge text-bg-secondary" for="nome_cargo">Nome cargo:</label>
        <input class="form-control" type="text" name="nome_cargo" placeholder="Insira o nome do cargo">
        <br>
        <div>
            <label class="badge text-bg-secondary" for="salario">Salário</label>
            <input class="form-control" type="text" name="salario" id="salario" placeholder="Insira o salário">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Inserir cargo">
    </form>
<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_cargos)) { ?>
        <?php if ($linha['id_cargo'] == $_GET['editar']) { ?>
            <h1>Editar cargo</h1>
            <form method="post" action="edita_cargo.php">
                <input type="hidden" name="id_cargo" value="<?= $linha['id_cargo'] ?>">
                <label class="badge text-bg-secondary" for="nome_cargo">Nome cargo:</label>
                <input class="form-control" type="text" name="nome_cargo" placeholder="Insira o nome do cargo" value="<?= $linha['nome_cargo'] ?>">
                <br>
                <label class="badge text-bg-secondary" for="salario">Salário</label>
                <input class="form-control" type="text" name="salario" id="salario" placeholder="Insira o salário" value="<?= $linha['salario'] ?>">
                <br>
                <input class="btn btn-success" type="submit" value="Salvar cargo">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>