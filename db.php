<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'aula_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$consulta_alunos = mysqli_query($conexao, "SELECT * FROM ALUNOS");

$consulta_matriculas = mysqli_query($conexao, "SELECT * 
FROM ALUNOS_CURSOS 
inner join cursos on alunos_cursos.id_curso = cursos.id_curso 
inner join alunos on alunos_cursos.id_aluno = alunos.id_aluno");

$consulta_funcionarios = mysqli_query($conexao, "SELECT * FROM FUNCIONARIOS");

$consulta_cargos = mysqli_query($conexao, "SELECT * FROM CARGOS");

$consulta_cargos_dos_funcionarios = mysqli_query($conexao, "SELECT * FROM CARGOS");
