<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<br><br>

<table id="alunos" class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo "<tr><td>" . $linha['nome_aluno'] . "</td>";
            echo "<td>" . $linha['data_nascimento'] . "</td>";
            echo "<td><a href=?pagina=inserir_aluno&editar=" . $linha['id_aluno'] . "><ion-icon name='create-outline'></ion-icon></a></td>";
            echo "<td><a href=deleta_aluno.php?id_aluno=" . $linha['id_aluno'] . "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
        }

        ?>
    </tbody>
</table>