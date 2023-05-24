<?php 
session_start();

session_destroy();

header('Location: ../private/dashboard-user.php');

?>