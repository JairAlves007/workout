<?php 
    session_start();
    require_once("conexao.php");
    
    $id = $_POST['id'];
    
    $sql = "UPDATE produtos SET favorito = 1 WHERE id = '$id'";

    $executar = mysqli_query($conn, $sql);
    // header("Location: {$_SESSION['paginaAtual']}");
?>