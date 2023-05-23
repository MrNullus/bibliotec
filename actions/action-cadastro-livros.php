<?php
require '../config.php';


$dados = [
    'isbn' => $_POST['fisbn'], 
    'titulo' => $_POST['ftitulo'], 
    'autor' => $_POST['fautor'],
    'editora' => $_POST['feditora'],
    'genero' => $_POST['fgenero'],
    'ano' => $_POST['fano'], 
    'exemplar' => $_POST['fexemplar'],
    'situacao' => $_POST['fsituacao']
];

print_r($dados);

$sql = "
    INSERT INTO livro 
        (ISBN, TITULO, AUTOR, EDITORA, GENERO, ANO, EXEMPLAR, SITUACAO) 
    VALUES
        ( ?, ?, ?, ?, ?, ?, ? , ?)
";
$sql = $conexao->prepare($sql);
$sql->bind_param(
    'issssiis', 
    $dados['isbn'],
    $dados['titulo'],
    $dados['autor'],
    $dados['editora'],
    $dados['genero'],
    $dados['ano'],
    $dados['exemplar'],
    $dados['situacao'],
);

$sql->execute();
$sql->close();

header('Location: http://localhost:8080/BIBLIOTEC/views/livros.php');

/*    $conn = new PDO("mysql:dbname=dbaula; host=localhost", "root", "");


    $stmt = $conn -> prepare("INSERT INTO tbpessoa(nome, tel, email) VALUES (:NOME, :TEL, :EMAIL)");


    $stmt->bindParam(":NOME", $nome);
    $stmt->bindParam(":TEL", $tel);
    $stmt->bindParam(":EMAIL", $email);


    $nome = $_POST['fnome'];
    $tel = $_POST['ftel'];
    $email = $_POST['femail'];


    $stmt-> execute();

    echo"Dados Cadastrados!" */

?>