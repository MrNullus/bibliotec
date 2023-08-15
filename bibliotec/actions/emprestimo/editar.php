<?php

require '../../config.php';
global $conexao;

$dados = [ 
    'rm'              => $_POST['escolha_aluno'],
    'id_livro'        => $_POST['escolha_livro'],
    'data-retirada'   => $_POST['data-retirada'],
    'data-devolucao'  => $_POST['data-devolucao'],
    'situacao'        => $_POST['situacao'],
    'multa'           =>  $_POST['multa']
];
mysqli_query(
    $conexao, 
    "UPDATE 
        EMPRESTIMO
    SET 
        ID_LIVRO        = '". $dados['id_livro'] ."',
        RM              = '". $dados['rm'] ."',
        DATA_RETIRADA   = '". $dados['data-retirada'] ."',
        DATA_DEVOLUCAO  = '". $dados['data-devolucao'] ."',
        SITUACAO        = '". $dados['situacao'] ."',
        MULTA           = '". $dados['multa'] ."'
    WHERE ID_EMP = '". $_POST['id_emp'] ."'
    "
);

// printf("Errormessage: %s\n", $conexao->error);
// print_r($dados);

echo "
    <script type='text/javascript'>
        alert('Emprestimo editado com sucesso!'); 
        window.location = '". url_base() ."/views/emprestimos.php#". $_POST['id_emp'] ."' 
    </script>
";
?>