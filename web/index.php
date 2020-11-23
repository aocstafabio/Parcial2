<?php
session_start();
include_once("header.php");
include_once("nav.php");
//include_once("home.php");

if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('location: /Parcial2/web/acceder.php');
}
?>