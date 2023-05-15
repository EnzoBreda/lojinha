<?php 
session_start();
session_destroy();
    $tema = $_GET['theme'];
    header("location: nav/home.php?theme=$tema");

?>