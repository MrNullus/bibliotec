<?php
    require '../../config.php';
    require '../componentes/header.php';

    if(isset($_SESSION['login'])) {
        echo $_SESSION['usuario']; 
?>

<link href="<?php echo url_base(); ?>/css/form.css" rel="stylesheet" type="text/css" />

<main class="container2">
    <?php if (!isset($_GET['id_emp'])) { ?>
        <form method="POST" action="<?php echo url_base(); ?>/actions/action-cadastro-emprestimos.php">
            <center><h1>CADASTRO <BR> EMPRESTIMOS</H1></center>

            <div class="form-group">
                <label for="escolha_aluno">Selecione um aluno</label>
                <select name="escolha_aluno">
                    <?php
                        while ($linha = mysqli_fetch_array($consulta_alunos)) {
                            echo '
                            <option value="'. $linha['RM'] .'">
                                '. $linha['NOME'] .'
                            </option>';
                        };
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="escolha_livro">Selecione um livro</label>
                <select name="escolha_livro">
                    <?php
                        while ($linha = mysqli_fetch_array($consulta_livros)) {
                            echo '
                            <option value="'. $linha['ID_LIVRO'] .'">
                                '. $linha['TITULO'] .'
                            </option>';
                        };
                    ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="dataretirada">Data de Retirada:</label>
                <input type="date" class="form-control" name="data-retirada">
            </div>
            
            <div class="form-group">
                <label for="datadevolucao">Data de Devolução:</label>
                <input type="date" class="form-control" name="data-devolucao" >
            </div> 
            
            <div class="form-group">
                <label for="situacao">Situação:</label>
                <input type="hidden" name="situacao" value="Aceito" />
            </div>

            <div class="form-group">
                <label for="multa">Multa:</label>
                <input type="text" class="form-control" name="multa">
            </div>

        
            <button type="submit" value="Cadastrar" class="custom-btn-2 btn-14-2" style="width: 900px">
                salvar
            </button>

        </form>
    <?php }  else  { 
        while ($linha = mysqli_fetch_array($consulta_emprestimos)) {
            if ($_GET['id_emp'] == $linha['ID_EMP']) { 
                $linha_atual = $linha;
    ?>
                <form method="POST" action="<?php echo url_base(); ?>/actions/emprestimo/editar.php">
                    <center><h1>ATUALIZAR <BR> EMPRESTIMOS</H1></center>

                    <input type="hidden" name="id_emp" value="<?php echo $_GET['id_emp'] ?>" />

                    <div class="form-group">
                        <label for="escolha_aluno">Selecione um aluno</label>
                        <select name="escolha_aluno">
                            <option value="<?php echo $linha_atual['RM']; ?>">
                                <?php echo $linha_atual['NOME']; ?>
                            </option>
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="escolha_livro">Selecione um livro</label>
                        <select name="escolha_livro">
                            <option value="<?php echo $linha_atual['ID_LIVRO']; ?>">
                                <?php echo $linha_atual['TITULO']; ?>
                            </option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="dataretirada">Data de Retirada:</label>
                        <input type="date" class="form-control" name="data-retirada" value="<?php echo $linha_atual['DATA_RETIRADA']; ?>" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="datadevolucao">Data de Devolução:</label>
                        <input type="date" class="form-control" name="data-devolucao" value="<?php echo $linha_atual['DATA_DEVOLUCAO']; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="situacao">Situação:</label>
                        <input type="text" name="situacao" value="<?php echo $linha_atual['SITUACAO']; ?>" />
                    </div>

                    <div class="form-group">
                        <label for="multa">Multa:</label>
                        <input type="text" class="form-control" name="multa" value="<?php echo $linha_atual['MULTA']; ?>">
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

