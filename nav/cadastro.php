<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/casinha_icon.png" type="image/x-icon">
    <title>Cadastro|Casinha</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../css/cadastro.css">
    <script> const $html = document.querySelector('html')</script>
    <?
    if(!isset($_GET['theme']) || isset($_GET['theme']) && $_GET['theme'] == 'light' || $_GET['theme'] == 'errorlight') {
       ?> 
        <script>
           
                $html.classList.toggle('root')
         function  switch_theme() {
                window.location.assign("cadastro.php?theme=dark")
                
        }
        </script> <?
    } else {
        ?> 
        <script>
                $html.classList.toggle('dark-mode')
          function  switch_theme() {
            window.location.assign("cadastro.php?theme=light")
             
         }
     </script> <?
     }
    ?>

    
</head>
<body>
    <? require_once "../trocar_tema.php" ?>
    <div id="container">
    <p draggable="false" id="cadastro">Cadastro</p>
        <div id="validate">

    <?
    session_start();

    if(isset($_GET['theme']) && $_GET['theme'] == 'dark' || isset($_GET['theme']) && $_GET['theme'] == 'errordark'){?>
        <form action="../validador_cadastro.php?theme=dark" method="post" id="form">
                    <p draggable="false">usuário</p>
                    <input type="text" name="usuario" class="inputtext" placeholder="usuário" class="text">
                    <p draggable="false">email</p> 
                    <input type="email" name="email" class="inputtext" placeholder="email" class="text" autocomplete="off">
                </br>
                    <p draggable="false">senha</p> 
                    <input type="password" name="senha" class="inputtext" placeholder="senha">
                    
                    <p draggable="false">confirmar senha</p> 
                    <input type="password" name="mesmasenha" class="inputtext" placeholder="mesma senha">
                    <?  if(isset($_GET['theme']) && $_GET['theme'] == 'errordark') { ?>
                        
                            <? if(isset($_SESSION['cadastro_senha']) && $_SESSION['cadastro_senha'] == 'senhasdiferentes') { ?>
                            <section class="error" draggable="false">Senhas diferentes! </section>
                        <? }   ?> 
                        <? if(isset($_SESSION['cadastro']) && $_SESSION['cadastro'] == 'emailjaexistente') { ?>
                            
                            <section class="error" draggable="false"><br>Este email já está em uso!</section>
                        <? }   ?> 
                   <? } ?> 
                    <input type="submit" value="continuar" class="submit" draggable="false">
            </form>
        </div>
            <p id="login" draggable="false"> Já tem conta? <a href="index.php?theme=dark">Faça o login aqui!</a> </p>
    </div>

    <?}
   
    if(!isset($_GET['theme']) || $_GET['theme'] == 'light' || isset($_GET['theme']) && $_GET['theme'] == 'errorlight') {?>
     <form action="../validador_cadastro.php?theme=light" method="post" id="form">
     <p draggable="false">usuário</p>
                    <input type="text" name="usuario" class="inputtext" placeholder="usuário" class="text">
                    <p draggable="false">email</p> 
                    <input type="email" name="email" class="inputtext" placeholder="email" class="text" autocomplete="off">
                </br>
                    <p draggable="false">senha</p> 
                    <input type="password" name="senha" class="inputtext" placeholder="senha">
                    
                    <p draggable="false">confirmar senha</p> 
                    <input type="password" name="mesmasenha" class="inputtext" placeholder="mesma senha">
                    <? if(isset($_GET['theme']) && $_GET['theme'] == 'errordark') { ?>
                   <? if(isset($_SESSION['cadastro_senha']) && $_SESSION['cadastro_senha'] == 'senhasdiferentes') { ?>
                    <section class="error" draggable="false">Senhas diferentes!</section>
                   <? }$_SESSION['cadastro_senha'] = ''; ?> 
                   
                   <?  if(isset($_SESSION['cadastro']) && $_SESSION['cadastro'] == 'emailjaexistente ') { ?>
                    <section class="error" draggable="false"><br>Este email já está em uso!</section>
                   <? } $_SESSION['cadastro'] = '';?> 
                   <? } ?> 
                    <input type="submit" value="continuar" class="submit" draggable="false">
            </form>
        </div>
            <p id="login"> Já tem conta? <a href="index.php?theme=light">Faça o login aqui!</a> </p>
    </div>
    
    <?}  
    ?>
</body>
</html>
</body>
</html>