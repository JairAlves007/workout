<?php 
    require_once("conexao.php");

    $id = $_GET['id'];
    
    $sql = "UPDATE produtos SET carrinho = 0 WHERE id = '$id'";

    $executar = mysqli_query($conn, $sql);
    header("Location: ../home.php");
?>