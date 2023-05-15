<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> 
        <nav>
            <ul id="nav">
            <section style=" margin-top: -10px"><? require_once "../trocar_tema.php" ?></section>
            <section  style="width: 18%; margin-top:5px;">
                    <li draggable="false" id="logo"><a href="">Casinha</a></li>
                
            </section>          
               

            <section style="width: 50%;">
                    <li id="pesquisa">
                        <form action="" id="form">
                        <input id="pesquisa_casinha" maxlength="128" placeholder="Buscar na Casinha" autocomplete="off" aria-autocomplete="list" aria-expanded="false" role="combobox">
                        <button disabled id="bot_pesquisa">
                            <img draggable="false" id="lupa_casinha" src="../imagens/lupa_casinha.png" alt="" style="max-width:18px; max-height:18px;">
                        </button>
                        </form>
                    </li>
            </section>    
               
            <section style="width: 300px; margin-top: -7px; margin-right: 1%;">
                    <li id="carrinho" style="margin: 10px 12% 15px 15px;"><a href="">(0) <img draggable="false" src="../imagens/carrinho.png" alt="" style="max-width:50px; max-height:50px;"></a></li>
               
                <? if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == 'SIM'){ 
                    if(isset($_GET['theme']) && $_GET['theme'] == 'dark'){?>
                   
                    <li id="logout" style="margin-top:15px; font-size:18px;"><a href="../logout.php?theme=dark">Sair</a></li>
                    <li style="margin-top: 2px; margin-left:18%"><a href=""> <img style="max-width:50px; max-height:50px;" src="../imagens/perfil_casinha.png" alt="" srcset=""> </a></li>

                    <? } else if(isset($_GET['theme']) && $_GET['theme'] == 'light') { ?>    
                    <li id="logout" style="margin-top:15px; font-size:18px;"><a href="../logout.php?theme=light">Sair</a></li>
                    <li style="margin-top: 2px; margin-left:18%"><a href=""> <img style="max-width:50px; max-height:50px;" src="../imagens/perfil_casinha.png" alt="" srcset=""> </a></li>
                <? } }
                else { ?>
                   <? if(!isset($_GET['theme']) || $_GET['theme'] == 'light') { ?>
             <li id="login" style="margin-left: 20%; margin-top:15px; font-size:18px;"><a href="index.php?theme=light" >Entrar</a></li>
        <? } ?>
        <? if(isset($_GET['theme']) && $_GET['theme'] == 'dark') { ?>
            <li id="login" style="margin-left: 20%; margin-top:15px; font-size:18px;"><a href="index.php?theme=dark" >Entrar</a></li>
        <? } ?>
                       
                    
                <? } ?> 

               
            
        </section>       
            </ul>
        </nav>
    </header>
</body>
</html>