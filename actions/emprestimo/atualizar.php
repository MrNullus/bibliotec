<?php
require '../../config.php';

$id = $_GET['id'];

$query = "
    UPDATE 
        EMPRESTIMO 
    SET
        SITUACAO = 'Concluído'
";

mysqli_query($conexao, $query); 

echo "
<script type='text/javascript'>
    alert('Emprestimo deletado com sucesso!'); 
    window.location = '". url_base() ."/views/alunos.php' 
</script>
";
?>