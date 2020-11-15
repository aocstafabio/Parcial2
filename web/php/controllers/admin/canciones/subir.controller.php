<?php

require __DIR__ . '/../../../conn.php';

$query = $db->prepare('SELECT * FROM canciones WHERE id = :id');
$query->execute([
    'titulo' => $_POST["titulo"],
    'artista' => $_POST["artista"],
    'banner' => $_POST["banner"],
    'id' => $_POST["id"]
]);

$cancion = $query->fetch(PDO::FETCH_OBJ);