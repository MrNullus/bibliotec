<?php            


//LIVRO    

require '../../config.php';

$id_livro = $_GET['id_livro'];
$exclui = 0;

while   ($linha = mysqli_fetch_array($consulta_emprestimos)){
    if($linha['ID_LIVRO'] == $id_livro) {
        $exclui = 1;
    }
}

if ($exclui == 1) {
    echo "
    <script type='text/javascript'>
        alert('O livro não pode ser excluido, pois ele já foi emprestado!');
        window.location = '". url_base() ."/views/livros.php';
    </script>
    ";
} else {
    
    $query = "
        DELETE FROM 
            LIVRO 
        WHERE 
            ID_LIVRO = $id_livro
    ";

    mysqli_query($conexao, $query); 
    echo "
    <script type='text/javascript'>
        alert('livro deletado com sucesso!'); 
        window.location = '". url_base() ."/views/livros.php' 
    </script>";
}
?>