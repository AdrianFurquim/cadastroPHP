<?php

    session_start();

    // Verificar se esta na pagina certa e foi enviado tanto o email quando a senha
    if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
    
        // Comparando para se existe tal valores no banco de dados e encaminhando o usuário
        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');    
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    }else{
        header('Location: login.php');
    }


?>