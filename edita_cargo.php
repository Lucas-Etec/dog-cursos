<?php
include 'db.php';

$id_cargo = $_POST['id_cargo'];
$nome_cargo = $_POST['nome_cargo'];
$salario = $_POST['salario'];

$query = "UPDATE CARGOS SET nome_cargo ='$nome_cargo', salario='$salario' WHERE id_cargo = $id_cargo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cargos');
