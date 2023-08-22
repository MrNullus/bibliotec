<?php require './config.php'; 
      require './views/componentes/header.php';
  ?>


<link href="../css/style.css" rel="stylesheet" type="text/css">

    <div class="hero bg-opacity">
      <div class="hero-content">
        <h1 class="hero-titulo">
          Bem-Vindos a BiblioEtec
        </h1>
      </div>
    </div>




    <h3 style="text-align: center;"> Preencha os dados para fazer login</h3>

        <form style="text-align: center;" method="post" action="<?php echo url_base(); ?>/views/login.php">

            <input class="form-control" type="text" name="usuario" placeholder="Nome do Usuário"><br>
            <input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
            <br>
            <br>
            <button type="submit" value="Entrar"  style="width: 300px">
                Entrar
            </button>

        </form>
  

    <?php
    
    if(isset($_GET['erro'])){?>

      <div style="text-align: center;">
          Usuário e/ ou senha Inválidos!
      <?php
    }


    ?>





  <?php include './views/componentes/footer.php'; ?>