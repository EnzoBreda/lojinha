<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/casinha_icon.png" type="image/x-icon">
    <title>Home | Casinha</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../css/home.css">
    <script> const $html = document.querySelector('html') </script>
    <?
    if(!isset($_GET['theme']) || $_GET['theme'] == 'light') {
       ?> 
        <script>
        $html.classList.toggle('root')
        function  switch_theme() {
        window.location.assign("home.php?theme=dark")
                
        }
        </script> <?
    } else if($_GET['theme'] == 'dark'){
        ?> 
        <script>
        $html.classList.toggle('dark-mode')
        function  switch_theme() {
        window.location.assign("home.php?theme=light")
             
         }
     </script> <?
     }
    ?>
</head>
<body>
    <? require_once "../header.php"?>
</body>
</html>