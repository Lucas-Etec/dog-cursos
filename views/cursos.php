<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<br><br>

<table id="cursos" class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
            echo "<tr><td>" . $linha['nome_curso'] . "</td>";
            echo "<td>" . $linha['carga_horaria'] . "</td>";
            echo "<td><a href=?pagina=inserir_curso&editar=" . $linha['id_curso'] . "><ion-icon name='create-outline'></ion-icon></a></td>";
            echo "<td><a href=deleta_curso.php?id_curso=" . $linha['id_curso'] . "><ion-icon name='trash-outline'></ion-icon></a></td></tr>";
        }
        ?>
    </tbody>
</table>