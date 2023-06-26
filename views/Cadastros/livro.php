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
                <label for="esolha_aluno">Escolha um Aluno:</label>
                <select name="esolha_aluno">
                    <option>Selecione um Aluno</option>
                    <?php
                        while ($linha = mysqli_fetch_Array($consulta_alunos)) {
                            echo '
                            <option value="'. $linha['RM'] .'"> 
                                '. $linha['NOME']. '
                                </option>';
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="fisbn">ISBN:</label>
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
                Salvar
            </button>
        </form>        
    <?php } else { 
        while ($linha = mysqli_fetch_array($consulta_livros)) {
            if ($_GET['id_livro'] == $linha['ID_LIVRO']) { 
    ?> 
        <form method="POST" action="<?php echo url_base(); ?>/actions/livro/editar.php">
            <center><h1>Editar LIVROS</H1></center>

            <input 
                type="hidden" 
                name="id_livro" 
                value="<?= $linha['ID_LIVRO'] ?>"
            />
                
            <div class="form-group">
                <label for="titulo">ISBN:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="fisbn" 
                    placeholder="123-45678901234" 
                    value="<?= $linha['ISBN'] ?>"
                />
            </div>

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="ftitulo"
                    placeholder="Tudo e possivel"
                    value="<?= $linha['TITULO'] ?>"
                />
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="fautor" 
                    placeholder="Eduardo Camilo"
                    value="<?= $linha['AUTOR'] ?>"
                />
            </div>

            <div class="form-group">
                <label for="editora">Editora:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="feditora" 
                    placeholder="Da esquina"
                    value="<?= $linha['EDITORA'] ?>"
                />
            </div>
 
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="fgenero"
                     placeholder="Romance"
                     value="<?= $linha['GENERO'] ?>"
                />
            </div>

            <div class="form-group">
                <label for="ano">Ano:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="fano" 
                    placeholder="2020"
                    value="<?= $linha['ANO'] ?>"
                />
            </div> 

            <div class="form-group">
                <label for="exemplar">Exemplar:</label>
                <input 
                    type="text" 
                    class="form-control"  
                    name="fexemplar" 
                    placeholder="12"
                    value="<?= $linha['EXEMPLAR'] ?>"
                />
            </div>

            <div class="form-group">
                <label for="situacao">Situação:</label>
                <input 
                    type="text"  
                    class="form-control"  
                    name="fsituacao"
                    placeholder="Em atraso"
                    value="<?= $linha['SITUACAO'] ?>"
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
    require '../componentes/footer.php';
?>

                
