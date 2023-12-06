<a class="btn btn-success" href="?pagina=inserir_funcionario">Inserir novo funcionário</a>

<table id="funcionarios" class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_funcionarios)) {
            echo "<tr><td>" . $linha['nome_funcionario'] . "</td>";
            echo "<td>" . $linha['cargo'] . "</td>";
            echo "<td><a href=?pagina=inserir_funcionario&editar=" . $linha['id_funcionario'] . "><ion-icon name='create-outline'></ion-icon></a></td>";
            echo "<td><a href=deleta_funcionario.php?id_funcionario=" . $linha['id_funcionario'] . ">Deletar</a></td></tr>";
        }
        
        // while ($linha = mysqli_fetch_array(mysqli_query($conexao, "SELECT * 
        // FROM CARGOS 
        // inner join FUNCIONARIOS on FUNCIONARIOS.cargo = CARGOS.id_cargo"))) {
        //     // echo "<p>". $linha['nome_cargo']. "</p>";
        // };
        ?>
    </tbody>
</table>