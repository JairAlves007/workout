<?php
    session_start();
    require_once("conexao.php");

    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);
    $telefone = mysqli_escape_string($conn, $_POST['telefone']);

    $sql = "INSERT INTO cadastro (nome, email, senha, telefone) VALUES ('$nome', '$email', md5('$senha'), '$telefone')";
    $executar = mysqli_query($conn, $sql);
    $_SESSION['logado'] = true;
    header('Location: ../home.php');
?>