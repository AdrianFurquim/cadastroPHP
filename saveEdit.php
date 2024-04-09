<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', senha='$senha', email='$email', telefone='$telefone', sexo='$genero', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', 
        endereco='$endereco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>