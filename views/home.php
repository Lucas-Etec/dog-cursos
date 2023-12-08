<h1 style="text-align: center;">Bem-vindos ao Dog Cursos</h1>

<form method="post" action="login.php">
    <label class="badge text-bg-secondary" for="usuario">Usuário</label>
    <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Nome do usuário" class="form-control">
    <br>
    <label class="badge text-bg-secondary" for="senha">Senha</label>
    <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" class="form-control">
    <br>
    <input class="btn btn-success" type="submit" value="Entrar">
    <?php if(isset($_GET['erro'])) {?>
        <br>
        <br>
        <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválidos
        </div>
    <?php } ?>
</form>