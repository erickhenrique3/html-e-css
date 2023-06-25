<?php

//docker inspect <nome_do_contêiner_mysql> | grep "IPAddress"

$host = '172.18.0.2'; // Host do banco de dados
$db = 'mydatabase'; // Nome do banco de dados
$user = 'myuser'; // Nome de usuário do MySQL
$password = 'mypassword'; // Senha do MySQL

$conexao = mysqli_connect($host, $user, $password, $db);

// Verifica a conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    exit();
}

// echo "Conexão com o banco de dados estabelecida!";
?>
