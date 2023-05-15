<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/casinha_icon.png" type="image/x-icon">
    <title>Login|Casinha</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../css/index.css">
    <script> const $html = document.querySelector('html')</script>
    <?
    if(!isset($_GET['theme']) || isset($_GET['theme']) && $_GET['theme'] == 'light' || isset($_GET['theme']) && $_GET['theme'] == 'errorlight') {
       ?> 
        <script>
           
                $html.classList.toggle('root')
         function  switch_theme() {
                window.location.assign("index.php?theme=dark")
                
        }
        </script> <?
    } else {
        ?>  
        <script>
                $html.classList.toggle('dark-mode')
          function  switch_theme() {
            window.location.assign("index.php?theme=light")
             
         }
     </script> <?
     }
    ?>

    
</head>
<body>

    <? require_once "../trocar_tema.php" ?>
    
    <div id="container">
    <p draggable="false" id="login">login</p>
        <div id="validate">

    <?
    if(isset($_GET['theme']) && $_GET['theme'] == 'dark' || isset($_GET['theme']) && $_GET['theme'] == 'errordark'){?>
        <form action="../login.php?theme=dark" method="post" id="form">
                    <p draggable="false">email</p> 
                    <input type="email" name="email" id="email" placeholder="email" class="text" autocomplete="off">
                </br>
                    <p draggable="false">senha</p>
                    <input type="password" name="senha" id="senha" placeholder="senha" class="text">
                    <? if(isset($_GET['theme']) && $_GET['theme'] == 'error' || isset($_GET['theme']) && $_GET['theme'] == 'errordark') { ?>
                    <section id="error" draggable="false">Usuário e/ou senha inválido(s)</section>
                   <? } ?> 
                    <input type="submit" value="entrar" class="submit" draggable="false">
            </form>
        </div>
            <p id="cadastro" draggable="false"> Não tem conta? <a href="cadastro.php?theme=dark">Cadastre-se aqui!</a> </p>
    </div>

    <?}
    if(!isset($_GET['theme']) && !isset($_GET['theme']) || isset($_GET['theme']) && $_GET['theme'] == 'errorlight' || isset($_GET['theme']) && $_GET['theme'] == 'light') {?>
     <form action="../login.php?theme=light" method="post" id="form">
                    <p>email</p> 
                    <input type="email" name="email" id="email" placeholder="email" class="text" autocomplete="off">
                </br>
                    <p>senha</p> 
                    <input type="password" name="senha" id="senha" placeholder="senha" class="text">
                    <? if(isset($_GET['theme']) && $_GET['theme'] == 'errorlight') { ?>
                    <section id="error">Usuário e/ou senha inválido(s)</section>
                   <? } ?> 
                    <input type="submit" value="entrar" class="submit">
            </form>
        </div>
            <p id="cadastro"> Não tem conta? <a href="cadastro.php?theme=light">Cadastre-se aqui!</a> </p>
    </div>
    
    <?}  
    ?>
</body>
</html>