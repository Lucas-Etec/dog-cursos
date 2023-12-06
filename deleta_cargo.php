<?php

include 'db.php';

$id_cargo = $_GET['id_cargo'];

$query = "DELETE FROM CARGOS WHERE id_cargo = $id_cargo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cargos');