<?php
    include_once("partials/head.php");
    require_once("controller/conexao.php");
    $sql = "SELECT * FROM produtos WHERE carrinho = 1";
    $executar = mysqli_query($conn, $sql);
?>
    <title>Carrinho</title>

<?php
    include_once("partials/end_head.php");
?>
    
<?php
    include_once("partials/header.php");
?>

    <h1 class="light white-text center">Meu Carrinho</h1>

    <div class="row" id="produtos">
        <div class="col s12 m4 push-m2 cards">
            <?php 
                while($dados = mysqli_fetch_assoc($executar)):
            ?>
            
            <div class="card">
                <div class="card-image light">
                    <img src="<?php echo $dados['img']; ?>" alt="Foto Do <?php echo $dados['nome']; ?>">

                    <a class="btn-floating halfway-fab waves-effect waves-light red" title="Favoritar">
                        <i class="material-icons left">favorite_border</i>
                    </a>
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
                                
                                <a href="controller/adicionarCarrinho.php?id=<?php echo $dados['id']; ?>" class="btn-floating red" title="Favoritar">
                                    <i class="material-icons right">add_shopping_cart</i>
                                </a>
                                
                                <?php
                                    else:
                                ?>
                                
                                <a href="controller/removerCarrinho.php?id=<?php echo $dados['id']; ?>" class="btn-floating red" title="Favoritar">
                                    <i class="material-icons right">shopping_cart</i>
                                </a>
                                
                                <?php
                                    endif;
                                ?>
                            </a>
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
                </div>

            </div>

            <?php
                endwhile;
            ?>
        </div>
    </div>

    <form action="" method="POST" class="form-comprar" accept-charset="utf-8">
        <div class="row">
            <div class="col s11">
                <button type="submit" class="btn green hoverable right" name="comprar">
                    Comprar
                    <i class="material-icons left">attach_money</i>
                </button>
            </div>
        </div>
    </form>


<?php
    include_once("partials/footer.php");
?>

<?php
    include_once("partials/scripts.php");
?>