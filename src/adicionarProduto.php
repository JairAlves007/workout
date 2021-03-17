<?php
    include_once("partials/head.php");
?>
    <title>Adicionar Produtos</title>

<?php
    include_once("partials/end_head.php");
?>
    
<?php
    include_once("partials/header.php");
?>

    <div class="row">
        <form action="controller/insert_product.php" method="POST" class="col s12 m6 push-m3">

            <h2 class="light white-text center">Cadastre Um Produto</h2>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">card_giftcard</i>
                    <input id="link_prefix" autocomplete="off" style="color: white;" type="url" name="img" class="validate" required="required">
                    <label for="link_prefix">Link Da Imagem</label>
                </div>
                
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment</i>
                    <input id="nome_prefix" autocomplete="off" style="color: white;" type="text" name="nome" class="validate" required="required">
                    <label for="nome_prefix">Nome Do Produto</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">inbox</i>
                    <input id="estoque_prefix" autocomplete="off" style="color: white;" type="number" name="estoque" class="validate" required="required">
                    <label for="estoque_prefix">Estoque</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="valor_prefix" autocomplete="off" style="color: white;" type="number" name="valor" class="validate" required="required">
                    <label for="valor_prefix">Valor</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <textarea id="txt_prefix" style="color: white;" name="descricao" class="materialize-textarea" required="required"></textarea>
                    <label for="txt_prefix">Descrição Do Produto</label>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <button type="submit" class="btn green hoverable">
                        Cadastrar
                        <i class="material-icons right">send</i>
                    </button>
                    <a href="home.php" class="btn red hoverable right">
                        Voltar
                        <i class="material-icons left">keyboard_arrow_left</i>
                    </a>
                </div>
            </div>
        </form>
    </div>

<?php
    include_once("partials/footer.php");
?>