<?php 
// https://cdn.awsli.com.br/600x450/1113/1113569/produto/45280200/6f4431908d.jpg
    session_start();
    require_once("conexao.php");
    
    $ids = $_SESSION['arrayID'];
    $estoques = $_SESSION['arrayEstoque'];

    for($i = 0; $i < count($estoques); $i++){
        if($estoques[$i] > 1){
            $estoqueNovo = $estoques[$i] - 1;
            $sql = "UPDATE produtos SET carrinho = 0, estoque = $estoques[$i] - 1 WHERE id = '$ids[$i]'"; 
            $executar = mysqli_query($conn, $sql);
        } else {
            $sql = "DELETE FROM produtos WHERE estoque = 1";
            $executar = mysqli_query($conn, $sql);
        }
    }

    $_SESSION['msg'] = "Compra Efetuada Com Sucesso!";
    header("Location: ../home.php");
?>