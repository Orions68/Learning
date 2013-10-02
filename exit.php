<?php
session_start();
session_destroy();
include_once 'header.php';
header("Location:login.php");
exit;
include_once 'footer.php';
?>