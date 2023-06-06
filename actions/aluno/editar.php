<?php

require '../../config.php';
global $conexao;


mysqli_query(
    $conexao, 
    "UPDATE 
        ALUNO
    SET 
        NOME         = '". $_POST['fnome'] ."',
        TELEFONE     = '". $_POST['ftelefone'] ."',
        DATA_NASC    = '". $_POST['fdata_nasc'] ."',
        EMAIL        = '". $_POST['femail'] ."',
        SENHA        = '". $_POST['fsenha'] ."',
        CURSO        = '". $_POST['escolha_curso'] ."',
        SERIE        = '". $_POST['escolha_serie'] ."',
        ANO_INGRESSO = '". $_POST['escolha_anoingr'] ."',
        PERIODO      = '". $_POST['escolha_periodo'] ."'
    WHERE RM = '". $_POST['frm'] ."'
    "
);

echo "
    <script type='text/javascript'>
        alert('Aluno editado com sucesso!'); 
        window.location = '". url_base() ."/views/alunos.php#". $_POST['frm'] ."' 
    </script>
";
?>