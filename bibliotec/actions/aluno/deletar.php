<?php


//ALUNO

require '../../config.php';

$rm = $_GET['rm'];
$exclui = 0;

while($linha = mysqli_fetch_array($consulta_emprestimos)){
    if($linha['RM'] == $rm) {
        $exclui = 1;
    }
}

if ($exclui == 1) {
    echo "
    <script type='text/javascript'>
        alert('O aluno não pode ser excluido, pois ele já pegou um livro!');
        window.location = '". url_base() ."/views/alunos.php';
    </script>
    ";
} else {
    
    $query = "
        DELETE FROM 
            ALUNO 
        WHERE 
            RM = $rm
    ";

    mysqli_query($conexao, $query); 
    echo "
    <script type='text/javascript'>
        alert('Aluno deletado com sucesso!'); 
        window.location = '". url_base() ."/views/alunos.php' 
    </script>
    ";
}
?>