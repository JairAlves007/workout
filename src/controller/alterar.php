<?php
    require_once("conexao.php");

    $id = $_POST['id_user'];
    $nomeNovo = $_POST['nome'];
    $senhaNova = $_POST['senha'];

    $sql = "UPDATE cadastro SET nome = '$nomeNovo', senha = md5('$senhaNova') WHERE id = '$id'";
    $executar = mysqli_query($conn, $sql);
    header("Location: ../home.php");
?>