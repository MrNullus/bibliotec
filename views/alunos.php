<?php
    require '../config.php';
    require './componentes/header.php';
?>

<center>
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<table border="1" border-color="green" cellpadding="12" cellspace="6">

    <tr>
        <th>RM</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data Nasc</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Curso</th>
        <th>Serie</th>
        <th>Ano Ingresso</th>
        <th>Periodo</th>
        <th>Deletar</th>
    </tr>

    <?php
    while($linha = mysqli_fetch_array($consulta_alunos)){
        echo '<tr>';
            echo '<a href="#'.$linha['RM'].'"></a>';
            echo '<td>' .$linha['RM']. '</td>';                                                                 
            echo '<td>' .$linha['NOME']. '</td>';
            echo '<td>' .$linha['TELEFONE']. '</td>';
            echo '<td>' .$linha['DATA_NASC']. '</td>';
            echo '<td>' .$linha['EMAIL']. '</td>';
            echo '<td>' .$linha['SENHA']. '</td>';
            echo '<td>' .$linha['CURSO']. '</td>';
            echo '<td>' .$linha['SERIE']. '</td>';
            echo '<td>' .$linha['ANO_INGRESSO']. '</td>';
            echo '<td>' .$linha['PERIODO']. '</td>';
            
            echo '
                <td>
                    <a href="./Cadastros/aluno.php?rm='.$linha['RM'] .'">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="../actions/aluno/deletar.php?rm='.$linha['RM'] .'">
                        Deletar
                    </a>
                </td>
            </tr>';
    }
    ?>
    

</table>

</center>

<?php
    require './componentes/footer.php';
?>
