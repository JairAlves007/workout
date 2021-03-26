<?php 
    session_start();
    require_once("conexao.php");
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        
        $sql = "UPDATE produtos SET favorito = 1 WHERE id = '$id'";
        $executar = mysqli_query($conn, $sql);

    } else if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "UPDATE produtos SET favorito = 1 WHERE id = '$id'";
        $executar = mysqli_query($conn, $sql);

        header("Location: {$_SESSION['paginaAtual']}");
    }
    
?>