<?php
include 'db.php';

$nome_cargo = $_POST['nome_cargo'];
$salario = $_POST['salario'];

$query = "INSERT INTO CARGOS(nome_cargo,salario) VALUES('$nome_cargo','$salario')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cargos');
