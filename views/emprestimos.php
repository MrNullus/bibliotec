<?php
    require '../config.php';
    require './componentes/header.php';
?>

<center>
<table border="1" cellpadding="12" cellspace="6">

    <tr>
        <th>Título</th>
        <th>RM</th>
        <th>Nome</th>
        <th>Data de Retirada</th>
        <th>Data de Devolução</th>
        <th>Situação</th>
        <th>Multa</th>
        <th>Atualizar</th>
    </tr>

<?php
    while($linha = mysqli_fetch_array($consulta_emprestimos)){
        echo 
            '<tr>';
                echo '<td>' .$linha['TITULO']. '</td>';
                echo '<td>' .$linha['RM']. '</td>';
                echo '<td>' .$linha['NOME']. '</td>';
                echo '<td>' .$linha['DATA_RETIRADA']. '</td>';
                echo '<td>' .$linha['DATA_DEVOLUCAO']. '</td>';
                echo '<td>' .$linha['SITUACAO']. '</td>';
                echo '<td>' .$linha['MULTA']. '</td>';

                echo '
                    <td> 
                        <A href="./Cadastros/emprestimo.php?id_emp='.$linha['ID_EMP'].'">
                            Editar
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