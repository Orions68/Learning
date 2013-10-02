<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ERROR);
$idconn = mysqli_connect('localhost', 'root', '', 'clientes')
or die("Database connection is no available");
?>