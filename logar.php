<?php
    require('/home/leoperes/webp/login/dbconfig.php');
    session_start();
    $_SESSION['sLogin'] = False;
    $vDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    function erro($aDados){
        $_SESSION['sMensagem'] = '<p style="color: red;">Usuário ou senha incorretos.<br>Tente Novamente!</p>';
        $_SESSION['sUsuario'] = $aDados['vUsuario'];
        $_SESSION['sSenha'] = $aDados['vSenha'];
        header("Location: index.php");
        die('usuario incorreto');
    }
    try{
        $vConnect = new PDO("mysql:host=$vServidor; dbname=".$vDatabase, $vHost, $vhSenha);
    }catch(\PDOException $e){ 
        echo 'conexão com banco de dados não foi realizado';
    };
    $vSql = "SELECT usuario, senha FROM usuarios 
            WHERE (usuario = :usuario);";

    $vResultado_login = $vConnect->prepare($vSql);
    $vResultado_login->bindParam(':usuario', $vDados['vUsuario']);
    $vResultado_login->execute();
    $vRow_cont = $vResultado_login->fetch(PDO::FETCH_ASSOC);
    if($vResultado_login && $vRow_cont == True){
        
        if(password_verify($vDados['vSenha'], $vRow_cont['senha'])){
            $_SESSION['sUsuario'] = $vDados['vUsuario'];
            $_SESSION['sLogin'] = True;
            header("Location: pagina_inicial.php");
        }else{
            erro($vDados);
        };
    }else{
        erro($vDados);
    };
    
?>