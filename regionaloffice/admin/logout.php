<?php
session_start();

session_destroy();
unset($_SESSION['uname_admin']);
header('location:index.php');

?>