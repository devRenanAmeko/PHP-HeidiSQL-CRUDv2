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

// obter o ID do cliente a ser editado
$id = $_GET['id'];
$cliente = $database->execute_query("SELECT * FROM clientes WHERE id = :id", [':id' => $id])->results[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Editar Cliente</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $cliente->id ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="text_nome" value="<?= $cliente->nome ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="text_email" value="<?= $cliente->email ?>" required>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </div>
    </form>
    <div class="text-center mt-3">
        <a href="results.php" class="btn btn-dark">Voltar</a>
    </div>
</div>

</body>
</html>
