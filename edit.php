<?php
    if (!empty($_GET['id'])) {
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        // Verificando se o resultados da pesquisa possui valores;
        if ($result->num_rows > 0 && !empty($id)) {
            while ($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
                $senha = $user_data['senha'];
            }
            print_r($nome);
        }else{
            header("Location: sistema.php");
            // Caso não tenha, retornar ao sistema.php
        }

        

        
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
    <a href="sistema.php">voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Formuário de Clientes</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Completo: </label>
                    <input type="text" id="nome" name="nome" class="inputUser" value="<?php echo $nome ?>" required>
                </div>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha: </label>
                    <input type="text" id="senha" name="senha" class="inputUser" value="<?php echo $senha ?>" required>
                </div>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email: </label>
                    <input type="text" id="email" name="email" class="inputUser" value="<?php echo $email ?>" required>
                </div>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone: </label>
                    <input type="tel" id="telefone" name="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                </div>
                <p>Sexo: </p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo $sexo == 'outro' ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>

                <div>
                    <label for="data_nascimento" class="labelInput"><b>Datas de Nascimento: </b></label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="" value="<?php echo $data_nasc ?>"  required>
                </div>
                
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade: </label>
                    <input type="text" id="cidade" name="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                </div>
                <div class="inputBox" >
                    <label for="estado" class="labelInput">Estado: </label>
                    <input type="text" id="estado" name="estado" class="inputUser" value="<?php echo $estado ?>" required>
                </div>
                <div class="inputBox" >
                    <label for="endereco" class="labelInput">Endereço: </label>
                    <input type="text" id="endereco" name="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update">
                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>