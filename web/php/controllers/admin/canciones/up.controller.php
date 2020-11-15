<?php
session_start();

require __DIR__ . '../../../../conn.php';
require __DIR__ . "../../../../../header.php";
require __DIR__ . "../../../../../nav.php";

print_r($_POST);


////////////////////////////////////////////// SUBIR IMAGEN ////////////////////////////////////////////////////
$nombre_archivo=$_FILES['banner']['name'];
$tipo_archivo=$_FILES['banner']['type'];
$tamaño_archivo=$_FILES['banner']['size'];

$destino = "../../../../images/".$nombre_archivo;

if (!(($_FILES['banner']['type'] == "application/msword" || strpos($tipo_archivo, "jpeg")) && ($tamaño_archivo < 800000))) {
        echo "La extensión o el tamaño del banner no es correcta. <br><br>
        <table>
        <tr><td>
        <li>Se permiten archivos .jpg</li>
        <li>Se permiten archivos de 800 Kb máximo.</li>
        </td></tr>
        </table>";

    }else{

    if (move_uploaded_file($_FILES['banner']['tmp_name'],  $destino)){


    }else{
        echo "Ocurrió algún error al subir la imagen. No pudo guardarse.";
    
        }
        }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$titulo = $_POST['titulo']; 
//$artista = $_POST['artista'];
//$genero = $_POST['genero'];
//$banner = $_POST['banner'];




$titulo = $_POST["titulo"]; 
$artista = $_POST["artista"];


$query = $db->prepare("INSERT INTO canciones (nombre, artista) VALUES ('$titulo','$artista')");

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