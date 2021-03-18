<?php 
// https://cdn.awsli.com.br/600x450/1113/1113569/produto/45280200/6f4431908d.jpg
    session_start();
    require_once("conexao.php");
    
    $estoqueAntigo = $_SESSION['estoque'];
    $estoqueNovo = $estoqueAntigo - 1;

    if($estoqueNovo > 0){
        $sql = "UPDATE produtos SET carrinho = 0, estoque = $estoqueNovo WHERE carrinho = 1";    
    } else {
        $sql = "DELETE FROM produtos WHERE estoque = 1";
    }

    $executar = mysqli_query($conn, $sql);
    header("Location: ../home.php");
?>