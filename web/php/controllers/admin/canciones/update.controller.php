<?php
session_start();

require __DIR__ . '/../../../conn.php';

require __DIR__ . "../../../../../header.php";
require __DIR__ . "../../../../../nav.php";

//require_once("header.php");
//require_once("nav.php");

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

//$cancion = $query->fetch(PDO::FETCH_OBJ);