<?php
    require '../../config.php';
    require '../componentes/header.php';
?>

<link href="<?php echo url_base(); ?>/css/form.css" rel="stylesheet" type="text/css" />

<main class="container2">
    <form method="POST" action="<?php echo url_base(); ?>/actions/action-cadastro-alunos.php">

        <center><h1>CADASTRO ALUNOS</H1></center>

        <div class="form-group">
            <label for="rm" >RM:</label>
            <input type="text" class="form-control" name="frm" placeholder="12345">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>          
            <input type="text" class="form-control" name="fnome" placeholder="Eduardo Henrique Pacheco">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="ftelefone" placeholder="12 34567-8901">
        </div>
        <div class="form-group">
            <label for="data nasc">Data Nasc:</label>
            <input type="date" class="form-control" name="fdata_nasc" placeholder="01/01/2001">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="femail" placeholder="email.email@email.com">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="fsenha">
        </div>

        <div class="form-group">
            <label for="curso">Curso:</label>
            <select name="escolha_curso">
                <option>Selecione seu curso</option>
                <option value="MTEC Informatica">MTEC Informatica</option>
                <option value="MTEC Administração">MTEC Administração</option>
                <option value="MTEC Logística">MTEC Logística</option>
                <option value="Administração">Administração</option>
            </select>
        </div>

        <div class="form-group">
            <label for="serie">serie:</label>
            <select name="escolha_serie">
                <option>Selecione sua serie</option>
                <option value="1°">1º ano </option>
                <option value="2°">2° ano</option>
                <option value="3°">3° ano</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="Ano_ingresso">Ano ingresso: </label>
            <select name="escolha_anoingr">
                <option>Selecione seu ano ingresso</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
        </div>

        <div class="form-group">
            <label for="periodo">Periodo </label>
            <select name="escolha_periodo">
                <option>Selecione seu período</option>
                <option value="Manhâ">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
        </div>

        <button type="submit" value="Cadastrar" class="custom-btn-2 btn-14-2" style="width: 900px">
            salvar
        </button>
    </form>



    </main>

    
    <br>
    <Br>
    <Br>
    <br>

<?php
    require '../componentes/footer.php';
?>

