<?php
require '../config.php';

$dados = [ 
  'id_livro'       => $_POST['escolha_livro'],
  'rm'             => $_POST['escolha_aluno'],
  'data-retirada'  => $_POST['data-retirada'],
  'data-devolucao' => $_POST['data-devolucao'],
  'situacao'       => $_POST['situacao'],
  'multa'          =>  $_POST['multa']
];

$sql = " 
    INSERT INTO emprestimo 
        (ID_EMP, ID_LIVRO, RM, DATA_RETIRADA, DATA_DEVOLUCAO, SITUACAO, MULTA) 
    VALUES
        (
            null, 
            '". $dados['id_livro'] ."', 
            '". $dados['rm'] ."', 
            '". $dados['data-retirada'] ."', 
            '". $dados['data-devolucao'] ."', 
            '". $dados['situacao'] ."', 
            '". $dados['multa'] ."'
        )
";

mysqli_query($conexao, $sql);

// print_r($dados);
// $sql = $conexao->prepare($sql);
// $sql->bind_params(
//     'iissss',
//     $dados['id_livro'],
//     $dados['rm'],
//     $dados['data-retirada'],
//     $dados['data-devolucao'],
//     $dados['situacao'],
//     $dados['multa']
// );

header('Location: '. url_base() .'/views/emprestimos.php');
?>

