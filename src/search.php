<?php
    include_once("partials/head.php");

    require_once("controller/conexao.php");

    $search = $_POST['search'];
    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$search%'";
    $executar = mysqli_query($conn, $sql);
?>

    <title>Pesquisa</title>

<?php
    include_once("partials/end_head.php");
?>

<?php
    include_once("partials/header.php");
?>

    <h1 class="light center white-text">1 Produto Relacionado</h1>

    <!-- Card De Produtos -->

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
                    
                    <a href="controller/adicionarFavoritos.php?id=<?php echo $dados['id']; ?>" id="link-car" class="btn-floating halfway-fab red" title="Favoritar">
                        <i class="material-icons right">favorite_border</i>
                    </a>
                    
                    <?php
                        else:
                    ?>
                    
                    <a href="controller/removerFavoritos.php?id=<?php echo $dados['id']; ?>" id="link-car" class="btn-floating halfway-fab red" title="Favoritar">
                        <i class="material-icons right">favorite</i>
                    </a>
                    
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