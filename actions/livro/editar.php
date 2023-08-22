<?php

require '../../config.php';
global $conexao;

$dados = [
    'isbn' => $_POST['fisbn'], 
    'titulo' => $_POST['ftitulo'], 
    'autor' => $_POST['fautor'],
    'editora' => $_POST['feditora'],
    'genero' => $_POST['fgenero'],
    'ano' => $_POST['fano'], 
    'exemplar' => $_POST['fexemplar'],
    'situacao' => $_POST['fsituacao'],
    'id_livro' => $_POST['id_livro']
];
mysqli_query(
    $conexao, 
    "UPDATE 
        LIVRO
    SET 
        ISBN        = '". $dados['isbn'] ."',
        TITULO      = '". $dados['titulo'] ."',
        AUTOR       = '". $dados['autor'] ."',
        EDITORA     = '". $dados['editora'] ."',
        ANO         = '". $dados['ano'] ."',
        EXEMPLAR    = '". $dados['exemplar'] ."',
        SITUACAO    = '". $dados['situacao'] ."'
    WHERE ID_LIVRO = '". $_POST['id_livro'] ."'
    "
);

printf("Errormessage: %s\n", $conexao->error);
print_r($dados);

echo "
    <script type='text/javascript'>
        alert('Livro editado com sucesso!'); 
        window.location = '". url_base() ."/views/livros.php#". $_POST['id_livro'] ."' 
    </script>
";
?>