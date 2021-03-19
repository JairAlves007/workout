<?php
    session_start();
    require_once("conexao.php");

    $id = $_POST['id_produto'];
    $estoqueAtual = (int) $_POST['estoque'];
    $estoqueNovo = (int) $estoqueAtual - 1;

    $sql = "UPDATE produtos SET estoque = $estoqueNovo WHERE id = '$id'";
    $executar = mysqli_query($conn, $sql);
    $_SESSION['msg'] = "Compra Efetuada Com Sucesso!";
    header("Location: {$_SESSION['paginaAtual']}");
?>