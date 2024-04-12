<?php
    if (isset($_POST['submit'])) {
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        // Inserindo os usuarios no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco, senha) 
        VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nasc', '$cidade', '$estado', '$endereco', '$senha')");
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css5.css">
</head>
<body>
    <a href="index.php">voltar</a>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Formuário de Clientes</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Completo: </label>
                    <input type="text" id="nome" name="nome" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha: </label>
                    <input type="password" id="senha" name="senha" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email: </label>
                    <input type="text" id="email" name="email" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone: </label>
                    <input type="tel" id="telefone" name="telefone" class="inputUser" required>
                </div>
                <p>Sexo: </p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>

                <div>
                    <label for="data_nascimento" class="labelInput"><b>Datas de Nascimento: </b></label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="" required>
                </div>
                
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade: </label>
                    <input type="text" id="cidade" name="cidade" class="inputUser" required>
                </div>
                <div class="inputBox" >
                    <label for="estado" class="labelInput">Estado: </label>
                    <input type="text" id="estado" name="estado" class="inputUser" required>
                </div>
                <div class="inputBox" >
                    <label for="endereco" class="labelInput">Endereço: </label>
                    <input type="text" id="endereco" name="endereco" class="inputUser" required>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>