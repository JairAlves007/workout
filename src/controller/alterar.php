<?php
    session_start();
    require_once("conexao.php");

    $id = $_POST['id_user'];
    $nomeNovo = $_POST['nome'];
    $senhaNova = $_POST['senha'];

    $sql = "UPDATE cadastro SET nome = '$nomeNovo', senha = md5('$senhaNova') WHERE id = '$id'";
    $executar = mysqli_query($conn, $sql);

    $_SESSION['msg'] = "Alterado Com Sucesso!";
    header("Location: ../home.php");
?>