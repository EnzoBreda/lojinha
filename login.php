<?php
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['theme'] = $_GET['theme'];
   
    $dsn = 'mysql:host=localhost;dbname=casinha';
        $usuario = 'root';
        $senha = '';

        $conexao = new PDO($dsn, $usuario, $senha);
            $query = " select * from tb_users where ";
            $query .= " email_user = :email ";
            $query .= " AND password_user = :senha ";   

            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':email', $_SESSION['email']);
            $stmt->bindValue(':senha', $_SESSION['senha']);

            $stmt->execute();
            
            $usuario = $stmt->fetch();
            

        if($_SESSION['senha'] == $usuario['password_user'] && $_SESSION['email'] == $usuario['email_user']){
            $_SESSION['autenticado'] = 'SIM';
            header('location: nav/home.php?theme='.$_SESSION['theme']);
        }
        else{
            $_SESSION['autenticado'] = 'NÃO';
            header('location: nav/index.php?theme=error'.$_SESSION['theme']); 
        }
?>