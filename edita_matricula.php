<?php
include 'db.php';

$id_aluno_curso = $_POST['id_aluno_curso'];
$id_curso = $_POST['id_curso'];
$id_aluno = $_POST['id_aluno'];

$query = "UPDATE CURSOS SET id_curso ='$id_curso', id_aluno='$carga_horaria' WHERE id_aluno_curso = $id_aluno_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matricula');
