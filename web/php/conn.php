<?php

try {
    $db = new PDO('mysql:dbname=musica;chartset=UTF-8;host=localhost', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
    // echo 'No hay conexión con la base';
}
