<?php
    require '../../config.php';
    require '../componentes/header.php';
?>

<link href="<?php echo url_base(); ?>/css/form.css" rel="stylesheet" type="text/css" />

<main class="container2">
    <?php if (!isset($_GET['id_livro'])) { ?>
    <form method="POST" action="<?php echo url_base(); ?>/actions/action-cadastro-livros.php">
        <center><h1>CADASTRO LIVROS</H1></center>

        <div class="form-group">
            <label for="esolha_isbn">Escolha um ISBN:</label>
            <select name="escolha_isbn">
                <option>Selecione um Aluno</option>
                <?php
                    while ($linha = mysqli_fetch_Array($consulta_livros)) {
                        echo '
                        <option value ="'. $linha['ID_LIVRO'] .'">
                            '. $linha['ISBN']. '
                            </option>';
                    }
                ?>
            
            <input type="text" class="form-control"  name="fisbn" placeholder="123-45678901234">
        </div>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control"  name="ftitulo"placeholder="Tudo e possivel">
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control"  name="fautor" placeholder="Eduardo Camilo">
        </div>

        <div class="form-group">
            <label for="editora">Editora:</label>
            <input type="text" class="form-control"  name="feditora" placeholder="Da esquina">
        </div>

        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input type="text" class="form-control"  name="fgenero" placeholder="Romance">
        </div>

        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="text" class="form-control"  name="fano" placeholder="2020">
        </div>

        <div class="form-group">
            <label for="exemplar">Exemplar:</label>
            <input type="text" class="form-control"  name="fexemplar" placeholder="nº 12">
        </div>

        <div class="form-group">
            <label for="situacao">Situação:</label>
            <input type="text" class="form-control"  name="fsituacao"placeholder="Em atraso">
        </div>
        
        <button type="submit" value="Cadastrar" class="custom-btn-2 btn-14-2" style="width: 900px">
            salvar
        </button>
    </form>
        
        <?php } ?>

        
    </main>

<?php
    require '../componentes/footer.php';
?>

                