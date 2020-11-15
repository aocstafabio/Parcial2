<?php
session_start();

require __DIR__ . '/../conn.php';

$sql = 'SELECT * FROM admins WHERE email = "'.$_POST['email'].'"';

$query = $db->prepare($sql);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_OBJ);

echo '<pre>';

var_dump($usuario);

if ($usuario && $usuario->pass == $_POST['password']) {
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $usuario->id;
    header('location: ../../admin/canciones/index.php');

} else {
    $_SESSION['message'] = [
        'type' => 'danger',
        'text' => 'El usuario o la contraseña son incorrectos'
    ];
    header('location: /Parcial2/web/acceder.php');
}


