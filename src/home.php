<?php
    require_once("controller/valida_login.php");
    $sql = "SELECT * FROM produtos";
    $executar = mysqli_query($conn, $sql);
?>

<?php
    include_once("partials/head.php");
?>

    <title>Em alta</title>

<?php
    include_once("partials/end_head.php");
?>

<?php
    include_once("partials/header.php");
?>

    <section class="fslider">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="assets/img/slider1.png">
                </li>

                <li>
                    <img src="assets/img/slider2.png">
                </li>

                <li>
                    <img src="assets/img/slider3.png">
                </li>
            </ul>
        </div>
    </section>

    <h1 class="light white-text mobile-title center">Seja Bem Vindo <?php echo $_SESSION['username']; ?></h1>

    <h3 class="light center white-text">Veja Um De Nossos Produtos</h3>

    <!-- Card De Produtos -->

    <div class="row" id="produtos">
        <div class="col s12 m4 push-m3 cards">
            <?php 
                $i = 1;
                // $i <= 2 &&
                while($i <= 3 && $dados = mysqli_fetch_assoc($executar)):
            ?>
            
            <div class="card">
                <div class="card-image light">
                    <img src="<?php echo $dados['img']; ?>" alt="Foto Do <?php echo $dados['nome']; ?>">
                    
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                        <?php
                            if($dados['favorito'] == 0):
                        ?>
                            <button type="submit" id="link-car" class="btn-floating halfway-fab red" title="Favoritar">
                                <i class="material-icons right">favorite_border</i>
                            </button>
                        <!-- <a href="controller/adicionarFavoritos.php?id=" >
                        </a> -->
                        
                        <?php
                            else:
                        ?>
                            <button type="submit" id="link-car" class="btn-floating halfway-fab red" title="Favoritar">
                                <i class="material-icons right">favorite_border</i>
                            </button>
                        <!-- <a href="controller/removerFavoritos.php?id=<?php echo $dados['id']; ?>" id="link-car" class="btn-floating halfway-fab red" title="Favoritar">
                            <i class="material-icons right">favorite</i>
                        </a> -->
                        
                        <?php
                            endif;
                        ?>
                    </form>
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
                            
                            <a href="controller/adicionarCarrinho.php?id=<?php echo $dados['id']; ?>" id="link-car" class="btn-floating red" title="Favoritar">
                                <i class="material-icons right">add_shopping_cart</i>
                            </a>
                            
                            <?php
                                else:
                            ?>
                            
                            <a href="controller/removerCarrinho.php?id=<?php echo $dados['id']; ?>" id="link-car" class="btn-floating red" title="Favoritar">
                                <i class="material-icons right">shopping_cart</i>
                            </a>
                            
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
                </div>

            </div>

            <?php
                    $i++;
                endwhile;
            ?>
        </div>
    </div>

<?php
    include_once("partials/footer.php");
?>

<?php
    include_once("partials/scripts.php");
?>