<?php

function query($sql, $conexao) {
    $consulta = mysqli_query($conexao, $sql);
    return $consulta;
}


$conexao = mysqli_connect(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);

$consulta_livros = query("SELECT * FROM LIVRO", $conexao);
$consulta_alunos = query("SELECT * FROM ALUNO", $conexao);

$sql = "
SELECT 
    LIVRO.TITULO,
    ALUNO.RM,
    ALUNO.NOME,
    EMPRESTIMO.ID_EMP,
    EMPRESTIMO.ID_LIVRO,
    EMPRESTIMO.DATA_RETIRADA,
    EMPRESTIMO.DATA_DEVOLUCAO,
    EMPRESTIMO.SITUACAO,
    EMPRESTIMO.MULTA
FROM
    LIVRO,
    ALUNO,
    EMPRESTIMO
WHERE
    (EMPRESTIMO.ID_LIVRO = LIVRO.ID_LIVRO)
        AND (EMPRESTIMO.RM = ALUNO.RM)
";
$consulta_emprestimos = query($sql, $conexao);

?>