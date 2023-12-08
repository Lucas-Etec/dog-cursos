<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DogCursos</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home">
                <img src="./img/logo.png" alt="Logo DogCursos">
            </a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matriculas</a>
                <a href="?pagina=funcionarios">Funcionários</a>
                <a href="?pagina=cargos">Cargos</a>
                <?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php"><?= $_SESSION['usuario']; ?> (sair)</a>
                <?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">
<!-- </body>

</html> -->