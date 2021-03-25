<?php
    session_start();
    include_once("partials/head.php");
    require_once("controller/conexao.php");

    $_SESSION['paginaAtual'] = $_SERVER['PHP_SELF'];
    $sql = "SELECT * FROM produtos WHERE favorito = 1";
    $executar = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($executar);
?>
    <title>Favoritos</title>

<?php
    include_once("partials/end_head.php");
?>
    
<?php
    include_once("partials/header.php");
?>

    <div class="card-panel hoverable fslider">
        <img src="assets/img/cardt.jpg" alt="Card" width="1300" height="300">
    </div>

    <h1 class="white-text light center">Seus Produtos Favoritos</h1>

    <?php
        if($rows > 0):
    ?>

    <div class="row" id="produtos">
        <div class="col s12 m4 push-m3 cards">

            <?php 
                while($dados = mysqli_fetch_assoc($executar)):
            ?>
            
            <div class="card">
                <div class="card-image light">
                    <img src="<?php echo $dados['img']; ?>" alt="Foto Do <?php echo $dados['nome']; ?>">
                    
                    <?php
                        if($dados['favorito'] == 0):
                    ?>

                    <form class="favorite">
                        <input type="hidden" id="id_fav" value="<?php echo $dados['id']; ?>">
                        <button type="submit" class="btn-floating halfway-fab red fav">
                            <i class="fa fa-heart-o" id="icon_fav" title="Adicionar Aos Favoritos"></i>                    
                        </button>
                    </form>
                    
                    <?php
                        else:
                    ?>
                    
                    <form class="favorite">
                        <input type="hidden" id="id_fav" value="<?php echo $dados['id']; ?>">
                        <button type="submit" class="btn-floating halfway-fab red fav">
                            <i class="fa fa-heart" id="icon_fav" title="Remover Dos Favoritos"></i>                    
                        </button>
                    </form>
                    
                    <?php
                        endif;
                    ?>
                </div>

                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <?php echo $dados['nome']; ?>
                        <i class="material-icons right">more_vert</i>
                    </span>

                    <div class="actions">
                        <div class="action-items">
                            <?php
                                if($dados['carrinho'] == 0):
                            ?>
                            
                            <form class="cart">
                                <input type="hidden" id="id_cart" value="<?php echo $dados['id']; ?>">
                                <button type="submit" class="btn-floating red">
                                    <i class="fa fa-cart-plus" id="icon_cart" title="Adicionar Ao Carrinho"></i>                    
                                </button>
                            </form>
                            
                            <?php
                                else:
                            ?>
                            
                            <form class="cart">
                                <input type="hidden" id="id_cart" value="<?php echo $dados['id']; ?>">
                                <button type="submit" class="btn-floating red">
                                    <i class="fa fa-shopping-cart" id="icon_cart" title="Remover Do Carrinho"></i>                    
                                </button>
                            </form>
                            
                            <?php
                                endif;
                            ?>
                            <p class="preco">R$ <?php echo $dados['valor']; ?></p>
                        </div>
                        <p class="inventory-title"><?php echo $dados['estoque']; ?> Em Estoque</p>
                    </div>
                </div>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">
                        <?php echo $dados['nome']; ?>
                        <i class="material-icons right">close</i>
                    </span>
                    <p>
                        <?php echo $dados['descricao']; ?>
                    </p>
                    
                    <form action="controller/comprar.php" method="POST">
                        <input type="hidden" name="id_produto" value="<?php echo $dados['id']; ?>">
                        <input type="hidden" name="estoque" value="<?php echo $dados['estoque']; ?>">
                        <button class="btn green hoverable" name="comprar">
                            Comprar
                            <i class="material-icons left">attach_money</i>
                        </button>
                    </form>
                </div>

            </div>

            <?php
                endwhile;
            ?>
        </div>
    </div>

    <?php
        else:
            echo '<h1 class="light white-text center">Nenhum Produto Favoritado</h1>';
        endif;
    ?>

<?php
    include_once("partials/footer.php");
?>

<?php
    include_once("partials/scripts.php");
?>