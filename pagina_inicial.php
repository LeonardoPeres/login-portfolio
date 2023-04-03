<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home - Bem vindo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     <!--<script src='main.js'></script> -->
</head>
<body>
    
    <?php
        session_start();
        if(!isset($_SESSION['sLogin'])){
            echo('
            <div class="div_failed">
                <h1>Acesso Negado! Área Restrita, por fazer fazer login</h1>
                <a href="index.html">Ir para Login</a> 
            </div>');
            die();
        }
    ?>
    <div class="div_sucess">
        <h1>Bem-Vindo! Login Realizado com Sucesso</h1>
    </div>
</body>
</html>

