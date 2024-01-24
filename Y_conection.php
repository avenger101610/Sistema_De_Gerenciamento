<?php 
    // Conexão ao banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tarefa_nova";
    $port = "3306";
    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
        //echo "conexão bem sucedida!";
    } catch (Exception $ex){
        echo "ERRO: houve uma falha ao tentar conectar ao banco de dados, tente novamente.";
    }

?>