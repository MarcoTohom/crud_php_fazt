<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumiendo una API</title>
</head>
<body>
    <form action="" method="GET">
        <label for="numero"></label>
        <input type="text" name="numero" placeholder="1">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
if (isset($_GET['numero'])){
    $numero = $_GET['numero'];
    $host = "https://reqres.in";
    $listUsers ="/api/users?page=";
    echo $numero;
    $json = file_get_contents($host.$listUsers.$numero);
    $datos = json_decode($json,true);
    var_dump($datos);
}