<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie poster</title>
</head>

<body>
    <form action="" method="GET">
        <label for="numero"></label>
        <input type="text" name="tmdb_id" placeholder="196" value="550">
        <button type="submit">Enviar</button>
    </form>
    <img style="width: 400px;" src="" alt="">
</body>

</html>
<?php
if (isset($_GET['tmdb_id'])) {
    $tmdb_id = $_GET['tmdb_id'];
} else {
    $tmdb_id = '550';
}
$key = "?api_key=3086be2d94fdd89024b0969339e3e71b";
$host = "https://api.themoviedb.org/3/";
$movieEndPoint = "movie/";
$api = $host . $movieEndPoint . $tmdb_id . $key;
$json = file_get_contents($api);
echo $api . "<br>";
$datos = json_decode($json, true);
$poster_path = $datos['poster_path'];
echo $poster_path;
echo '<img style="width"src="https://image.tmdb.org/t/p/w500/' . $poster_path . '">' ?>