<?php
require_once "config.php";

?>

<?php

    //Inicio da conexão com o banco de dados utilizando PDO
    $host = BD_SERVIDOR;
    $user = BD_USUARIO;
    $pass = BD_SENHA;
    $dbname = BD_BANCO;
    $port = BD_PORT;

    try {
        //Conexão com a porta
        //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

        //Conexão sem a porta
        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
        //echo "Conexão com banco de dados realizado com sucesso.";
    } catch (PDOException $e) {
        echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $e->getMessage();
    }
    //Fim da conexão com o banco de dados utilizando PDO