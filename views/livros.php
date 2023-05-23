<?php
    require '../config.php';
    require './componentes/header.php';
?>
    
<center>

<table border="1" cellpadding="12" cellspace="6">

    <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Gênero</th>
        <th>Ano</th>
        <th>Exemplares</th>
        <th>Situação</th>
        <th>Deletar</th>
    </tr>
    
    <?php
    while($linha = mysqli_fetch_array($consulta_livros)){
        echo '<tr>';
            echo '<td>' .$linha['ISBN']. '</td>';
            echo '<td>' .$linha['TITULO']. '</td>';
            echo '<td>' .$linha['AUTOR']. '</td>';
            echo '<td>' .$linha['EDITORA']. '</td>';
            echo '<td>' .$linha['GENERO']. '</td>';
            echo '<td>' .$linha['ANO']. '</td>';
            echo '<td>' .$linha['EXEMPLAR']. '</td>';
            echo '<td>' .$linha['SITUACAO']. '</td>';

            echo 
                '<td>
                    <a href="../actions/livro/deletar.php?id_livro='.$linha['ID_LIVRO'] .'">
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