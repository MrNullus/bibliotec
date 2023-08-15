<?php
    require '../config.php';

    $usuario = addslashes($_POST['usuario']);
    $senha   = md5($_POST['senha']);

    $query = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND SENHA = '$senha'";

    $consulta = mysqli_query($conexao, $query);

    if(mysqli_num_rows($consulta) == 1){
        //se retornar 1 linha na consulta, pode fazer login
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;
        //redireciona para a index, pois ela esta fazendo as rotas dos links
        //caso não tenha feito as rotas, direcione para a pagina de emprestimos.php
        header('location: emprestimos.php');
    }else{
        //não pode fazer login, senha ou usuario invalidos
        //redirecionar para a pagina com o formulário de login com uma variável no GET com erro
        header('location: ../index.php?erro');
    }




?>