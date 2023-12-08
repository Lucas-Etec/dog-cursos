<?php
# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da Página

if (isset($_SESSION['login'])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'cursos';
    }
} else {
    $pagina = 'home';
}
    
if ($pagina == 'cursos') {
    include 'views/cursos.php';
} else if ($pagina == 'alunos') {
    include 'views/alunos.php';
} else if ($pagina == 'matriculas') {
    include 'views/matriculas.php';
} else if ($pagina == 'cargos') {
    include 'views/cargos.php';
} else if ($pagina == 'funcionarios') {
    include 'views/funcionarios.php';
} else if ($pagina == 'inserir_curso') {
    include 'views/inserir_curso.php';
} else if ($pagina == 'inserir_aluno') {
    include 'views/inserir_aluno.php';
} else if ($pagina == 'inserir_matricula') {
    include 'views/inserir_matricula.php';
} else if ($pagina == 'inserir_funcionario') {
    include 'views/inserir_funcionario.php';
} else if ($pagina == 'inserir_cargo') {
    include 'views/inserir_cargo.php';
}  else {
    include 'views/home.php';
}

// include $pagina == null ? "views/home.php": "views/" + $pagina;

# Rodapé
include 'footer.php';
?>
