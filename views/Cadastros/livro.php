<?php
    require '../../config.php';
    require '../componentes/header.php';

    if(isset($_SESSION['login'])) {
        echo $_SESSION['usuario']; 
?>

<link href="<?php echo url_base(); ?>/css/form.css" rel="stylesheet" type="text/css" />

<main class="container2">
    <?php if (!isset($_GET['id_livro'])) { ?>
    <form method="POST" action="<?php echo url_base(); ?>/actions/action-cadastro-livros.php">
        <center><h1>CADASTRO LIVROS</H1></center>

        <div class="form-group">
            <label for="esolha_isbn">Escolha um ISBN:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fisbn" 
            placeholder="123-45678901234"
            />
        </div>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input 
            type="text" 
            class="form-control"  
            name="ftitulo"
            placeholder="Tudo e possivel"
            />
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fautor" 
            placeholder="Eduardo Camilo"
            />
        </div>

        <div class="form-group">
            <label for="editora">Editora:</label>
            <input 
            type="text" 
            class="form-control"  
            name="feditora" 
            placeholder="Da esquina"
            />
        </div>

        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fgenero" 
            placeholder="Romance"
            />
        </div>

        <div class="form-group">
            <label for="ano">Ano:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fano" 
            placeholder="2020"
            />
        </div>


        <div class="form-group">
            <label for="exemplar">Exemplar:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fexemplar" 
            placeholder="nº 12"
            />
        </div>

        <div class="form-group">
            <label for="situacao">Situação:</label>
            <input 
            type="text" 
            class="form-control"  
            name="fsituacao"
            placeholder="Em atraso"
            />
        </div>
        
        <button type="submit" value="Cadastrar" class="custom-btn-2 btn-14-2" style="width: 900px">
            salvar
        </button>
    </form>
        
    
        <?php } else  { 
    while ($linha = mysqli_fetch_array($consulta_livros)) {
        if ($_GET['id_livro'] == $linha['ID_LIVRO']) { 
?>
            <form method="POST" action="<?php echo url_base(); ?>/actions/livro/editar.php">
                <center><h1>Editar Livro</h1></center>
                <input 
                        type="hidden" 
                        class="form-control" 
                        name="id_livro" 
                        value="<?php echo $linha['ID_LIVRO']; ?>"
                    />
                <div class="form-group">
                    <label for="esolha_isbn" >ISBN:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="fisbn" 
                        value="<?php echo $linha['ISBN']; ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="titulo">TITULO:</label>          
                    <input 
                        type="text" 
                        class="form-control" 
                        name="ftitulo" 
                        value="<?php echo $linha['TITULO']; ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="fautor" 
                        value="<?php echo $linha['AUTOR']; ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="editora">Editora:</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        name="feditora" 
                        value="<?php echo $linha['EDITORA']; ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="fgenero" 
                        value="<?php echo $linha['GENERO']; ?>"
                    />
                </div>
                <div class="form-group">
                    <label for="ano">Ano:</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        name="fano" 
                        value="<?php echo $linha['ANO']; ?>"
                    />
                </div>

                <div class="form-group">
                    <label for="exemplar">Exemplar:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="fexemplar" 
                        value="<?php echo $linha['EXEMPLAR']; ?>"
                    />
                </div>

                
                <div class="form-group">
                    <label for="situacao">Situação:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="fsituacao" 
                        value="<?php echo $linha['SITUACAO']; ?>"
                    />
                </div>
            
              

                <button type="submit" value="Cadastrar" class="custom-btn-2 btn-14-2" style="width: 900px">
                    Salvar
                </button>
            </form>
    <?php 
        }
    }
}   
?>

</main>

<?php
} else {
    header('location: ../../index.php') ;
    }

?>
<?php
    require '../componentes/footer.php';
?>

                