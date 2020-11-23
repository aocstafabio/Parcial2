<?php
session_start();

require __DIR__ . '/../../../conn.php';
print_r($_POST);


$query = $db->prepare("UPDATE canciones SET
nombre=:titulo, artista=:artista WHERE id = :id");


$query->execute([
    'titulo' => $_POST["titulo"],
    'artista' => $_POST["artista"],
    'id' => $_POST["id"]
]);

$_SESSION['alert'] = [
    'message' => 'Operacion realizada con exito',
    'type' => 'success'
];

header('location: ../../../../admin/canciones/index.php');