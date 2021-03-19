<?php
    session_start();
    require_once("conexao.php");

    $email = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = md5('$senha')";
    $executar = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($executar);

    $rows = mysqli_num_rows($executar);

    if($rows == 1){
        $_SESSION['id_user'] = $resultado['id'];
        $_SESSION['username'] = $resultado['nome'];
        $_SESSION['autenticado'] = true;
        $_SESSION['logado'] = true;
        header('Location: ../home.php');
    } else {
        $_SESSION['autenticado'] = false;
        header('Location: ../index.php');
    }
?>