<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbName = 'php_cadastros_cliente';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
        
    }else{
        
    }

?>