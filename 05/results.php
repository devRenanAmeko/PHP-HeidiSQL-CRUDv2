<?php

use sys4soft\Database;

// importar a class Database e configurações
require_once('Database.php');

$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => 'weVAroW73AwABO4iFi2IhAzu5ENA4I',
];

// instanciação de objeto Database
$database = new Database($config);

// resultados
$results = $database->execute_query("SELECT * FROM clientes");

$total_clientes = $results->affected_rows;
$results = $results->results;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO - Apresentar dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: aliceblue;
        }

        .caixa-cliente {
            border: 1px solid gray;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body class="container">

    <h3 class="text-center my-4">Dados dos Meus Clientes</h3>

    <?php if ($total_clientes == 0): ?>
        <div class="alert alert-warning" role="alert">
            Não foram encontrados dados.
        </div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($results as $cliente): ?>
                <div class="col-md-12 text-center">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <strong><?= $cliente->nome ?></strong></h5>
                            <p class="card-text">Email: <strong><?= $cliente->email ?></strong></p>
                            <form action="remove.php" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $cliente->id ?>">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                            <a href="edit.php?id=<?= $cliente->id ?>" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <p class="text-center mt-4"><strong>Total: <?= $total_clientes ?> Cliente(s)</strong></p>

    <div class="text-center mt-3 mb-5">
        <a href="index.php" class="btn btn-dark">Inserir novo registro</a>
    </div>

</body>

</html>
