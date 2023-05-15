<?php
    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('location: nav/index.php?login=error2');
    }
?>