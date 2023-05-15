<?php

    session_start();

    if(!empty($_POST['usuario'])){
   
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['theme'] = $_GET['theme'];

    $dsn = 'mysql:host=localhost;dbname=casinha';
    $usuario = 'root';
    $senha = '';

    $conexao =  new PDO($dsn, $usuario, $senha);

    $query = " select * from tb_users where ";
    $query .= " email_user = :email ";
    $query .= " AND password_user = :senha ";   

    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':email', $_SESSION['email']);
    $stmt->bindValue(':senha', $_SESSION['senha']);

    $stmt->execute();
    
    $usuario = $stmt->fetch();
    
    $_SESSION['cadastro'] = '';
    $_SESSION['cadastro_senha'] = '';
    
   
    if($_POST['senha'] != $_POST['mesmasenha']){
        $_SESSION['cadastro_senha'] = 'senhasdiferentes';
        
    }else{
        
        $_SESSION['cadastro_senha'] = 'senhavalida';
    }

    if($_SESSION['email'] == $usuario['email_user']){
        $_SESSION['cadastro'] = 'emailjaexistente';
    }else{

        $_SESSION['cadastro'] = 'emailvalido';
    }
    
    if($_SESSION['cadastro'] == 'emailjaexistente' || $_SESSION['cadastro_senha'] == 'senhasdiferentes'){
        header('location: nav/cadastro.php?theme=error' . $_GET['theme']);
    }

    if($_SESSION['cadastro_senha'] == 'senhavalida' && $_SESSION['cadastro'] == 'emailvalido'){
        $query = '
            insert into tb_users (name_user, email_user, password_user) values (?,?,?)
        ';
        $stmt = $conexao->prepare($query);
        $stmt->execute([$_POST['usuario'], $_POST['email'], $_POST['senha']]);
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['senha'] = $_POST['senha'];
        header('location: login.php?theme='.$_SESSION['theme']);
    }
    }
?>