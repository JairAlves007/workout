<?php
    session_start();
    require_once("conexao.php");
    
    if($_POST['valor'] > 0 && $_POST['estoque'] > 0){
        $img = $_POST['img'];
        $nome = $_POST['nome'];
        $estoque = $_POST['estoque'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
    
        $sql = "INSERT INTO produtos (img, nome, estoque, valor, descricao) VALUES ('$img', '$nome', '$estoque', '$valor', '$descricao')";
        $executar = mysqli_query($conn, $sql);
        $_SESSION['msg'] = "Produto Adicionado Com Sucesso!";
    } else {
        $_SESSION['msg'] = "Erro Ao Cadastrar! Verifique Os Campos Novamente!";
    }

    header("Location: ../adicionarProduto.php");
?>