<?php
    include 'db.php';

    $nome_funcionario = $_POST['nome_funcionario'];
    $cargo = $_POST['escolha_cargo'];

    $query = "INSERT INTO FUNCIONARIOS(nome_funcionario,cargo) VALUES('$nome_funcionario','$cargo')";

    mysqli_query($conexao, $query);

    header('location:index.php?pagina=funcionarios');