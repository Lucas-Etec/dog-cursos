<?php

include 'db.php';

$id_funcionario = $_GET['id_funcionario'];

$query = "DELETE FROM FUNCIONARIOS WHERE id_funcionario = $id_funcionario";

mysqli_query($conexao, $query);

header('location:index.php?pagina=funcionarios');