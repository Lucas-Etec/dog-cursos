<?php

include 'db.php';
// print($_POST['senha']. "<br>");

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);
// print($senha);
// exit();

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;

    header('location:index.php');
} else {
    header('location:index.php?erro');
}
