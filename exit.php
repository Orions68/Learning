<?php
session_start();
session_destroy();
include 'header.php';
header("Location:login.php");
exit;
include 'footer.php';
?>