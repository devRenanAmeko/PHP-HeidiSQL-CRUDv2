<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formulário PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: aliceblue;
        }
        .wrapper{
            font-family: Arial, Helvetica, sans-serif;
            margin: 50px auto;
            padding: 30px;
            width: 500px;
            background-color: rgb(240,240,240);
            border-radius: 20px;
            border: 1px solid rgb(200,200,200);
        }
    </style>
</head>
<body>

    <div class="wrapper shadow p-4 bg-light rounded">
        <h2 class="text-center  mb-3">Registo de Clientes</h2>
        <form action="tratar.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="text_nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="text_email" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="results.php" class="btn btn-dark">Ver Resultados</a>
        </div>
    </div>

    
</body>
</html>
