<?php
    session_start();
    require_once("conexao.php");

    if(!$_SESSION['logado']){
        header("Location: ./index.php");
        unset($_SESSION['logado']);
    }
?>