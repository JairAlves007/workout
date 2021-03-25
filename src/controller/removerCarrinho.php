<?php 
    session_start();
    require_once("conexao.php");

    $id = $_POST['id'];
    
    $sql = "UPDATE produtos SET carrinho = 0 WHERE id = '$id'";

    $executar = mysqli_query($conn, $sql);
?>