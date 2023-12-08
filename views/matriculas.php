<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<br><br>

<table id="matriculas" class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Aluno</th>
            <th>Curso</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_matriculas)) {
            echo "<tr><td>" . $linha['nome_aluno'] . "</td>";
            echo "<td>" . $linha['nome_curso'] . "</td>";
            echo "<td><a href=?pagina=inserir_matricula&editar=" . $linha['id_aluno_curso'] . "><ion-icon name='create-outline'></ion-icon></a></td>";
            echo "<td><a href=deleta_matricula.php?id_aluno_curso=" . $linha['id_aluno_curso'] . "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
        }
        ?>
    </tbody>
</table>