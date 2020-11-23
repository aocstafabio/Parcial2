<?php
include_once("header.php");
include_once("nav.php");

if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('location: /Parcial2/web/home.php');
}

//EN PROCESO