<?php
    require '../../config.php';
    require '../componentes/header.php';
?>

<link href="<?php echo url_base(); ?>/css/form.css" rel="stylesheet" type="text/css" />

<main class="container2">
    <form method="POST" action="<?php echo url_base(); ?>/actions/action-cadastro-emprestimos.php">

        <center><h1>CADASTRO <BR> EMPRESTIMOS</H1></center>

        <div class="form-group">
            <label for="escolha_aluno">Selecione um aluno</label>
            <select name="escolha_aluno">
                <option>Selecione um Aluno</option>
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
                <option>Selecione um Livro</option>
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
            <input type="date" class="form-control" name="data-devolucao">
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

    </main>

<?php
    require '../componentes/footer.php';
?>

