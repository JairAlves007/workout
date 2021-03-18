<?php
    require_once("conexao.php");

    if($_POST['valor'] > 0){
        $img = mysqli_escape_string($conn, $_POST['img']);
        $nome = mysqli_escape_string($conn, $_POST['nome']);
        $estoque = mysqli_escape_string($conn, $_POST['estoque']);
        $valor = mysqli_escape_string($conn, $_POST['valor']);
        $descricao = mysqli_escape_string($conn, $_POST['descricao']);
    
        $sql = "INSERT INTO produtos (img, nome, estoque, valor, descricao) VALUES ('$img', '$nome', '$estoque', '$valor', '$descricao')";
        $executar = mysqli_query($conn, $sql);
        header("Location: ../adicionarProduto.php");
    } else {
        header("Location: ../adicionarProduto.php");
    }
?>