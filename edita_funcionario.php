<?php
include 'db.php';

$id_funcionario = $_POST['id_funcionario'];
$nome_funcionario = $_POST['nome_funcionario'];
$cargo = $_POST['escolha_cargo'];

$query = "UPDATE funcionarioS SET nome_funcionario ='$nome_funcionario', cargo='$cargo' WHERE id_funcionario = $id_funcionario";

mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionarios');
