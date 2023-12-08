</div>
<footer>
    <div class="container">
        ©2023 DogCursos - Todos os direitos reservados.
    </div>
</footer>

<script src="./js/jquery.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cursos').DataTable();
    })
    $(document).ready(function() {
        $('#alunos').DataTable();
    })
    $(document).ready(function() {
        $('#matriculas').DataTable();
    })
    $(document).ready(function() {
        $('#funcionarios').DataTable();
    })
    $(document).ready(function() {
        $('#cargos').DataTable();
    })
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>