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
];

// remover o cliente
$results = $database->execute_non_query("DELETE FROM clientes WHERE id = :id", $params);

echo '<pre>';
print_r($results);

// voltar ao formulário automaticamente
header('Location: results.php');
