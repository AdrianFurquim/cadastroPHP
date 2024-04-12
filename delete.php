<?php
    if (!empty($_GET['id'])) {
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        // Se existe alguma coluna no banco que tenha este resultado
        if ($result->num_rows > 0) {
            
            $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
            $resultDelete = $conexao->query($sqlDelete);
        }
        header('Location: sistema.php');

    }

?>