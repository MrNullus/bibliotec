<?php
require '../config.php';

$dados = [ 
    'rm' => $_POST['frm'], 
    'nome' => $_POST['fnome'],
    'telefone' => $_POST['ftelefone'],
    'data_nasc' => $_POST['fdata_nasc'],
    'email' => $_POST['femail'], 
    'senha' => $_POST['fsenha'],
    'curso' => $_POST['escolha_curso'],
    'serie' => $_POST['escolha_serie'],
    'ano_ingresso' => $_POST['escolha_anoingr'],
    'periodo' => $_POST['escolha_periodo']
];
// print_r($dados);

$sql = "
    INSERT INTO aluno
        (RM, NOME, TELEFONE, DATA_NASC, EMAIL, SENHA, CURSO, SERIE, ANO_INGRESSO, PERIODO) 
    VALUES
        ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
";

$sql = $conexao->prepare($sql);
$sql->bind_param(
    'issssssiis', 
    $dados['rm'],
    $dados['nome'],
    $dados['telefone'],
    $dados['data_nasc'],
    $dados['email'],
    $dados['senha'],
    $dados['curso'],
    $dados['serie'],
    $dados['ano_ingresso'],
    $dados['periodo']
);

$sql->execute();
$sql->close();

header('Location: '. url_base() .'/views/alunos.php');
?>