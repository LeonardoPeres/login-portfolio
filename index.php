<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Login</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" type="text/css" href="login.css"/>
    </head> 
    <body>

            <div class="login-box">
                <form action="/login/logar.php" method="post" target="_self">
                    <div class="inp-div"><h1>Login</h1></div>
                    <div>
                        <?php
                            session_start();
                            if(isset($_SESSION['sMensagem'])){
                                echo($_SESSION['sMensagem']);
                            };
                            //echo($_SESSION['sUsuario']);
                        ?>
                    </div>
                    <div class="inp-div">
                        <label>Insira seu Usuário</label><br>
                        <input class="text" type="text" name="vUsuario" value="<?php if(isset($vDados)){echo($vDados['vUsuario']);};?>"/>
                    </div>
                    <div class="inp-div">
                        <label>Insira sua Senha</label><br>
                        <input class="text" type="password" name="vSenha" value="<?php if(isset($vDados)){echo($vDados['vSenha']);};?>"/>
                    </div>
                    <div class="inp-div">
                        <input class="submit" type="submit" value="ENTRAR"/>
                    </div>
                </form>
                <a
            </div>
        
    </body>
    <foot>

    </foot>
</html>