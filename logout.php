<?php 
include 'adminpanel/connection.php';
session_start();
session_destroy();

header("location: signInForm.php");
exit();
?>