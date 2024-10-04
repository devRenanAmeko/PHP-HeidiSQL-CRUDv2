<?php

use sys4soft\Database;

// importar a class Database e configurações
require_once("Database.php");

// instanciação de objeto Database
$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => 'weVAroW73AwABO4iFi2IhAzu5ENA4I',
];

$database = new Database($config);

// parâmetros
$params = [
    ':id' => $_POST['id'],
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email'],
];

// atualizar os dados do cliente
$results = $database->execute_non_query("UPDATE clientes SET nome = :nome, email = :email WHERE id = :id", $params);

echo '<pre>';
print_r($results);

// voltar ao formulário automaticamente
header('Location: results.php');
