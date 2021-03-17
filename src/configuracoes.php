<?php
    session_start();
    include_once("partials/head.php");
?>
    <title>Configurações</title>

<?php
    include_once("partials/end_head.php");
?>
    
<?php
    include_once("partials/header.php");
?>

    <h1 class="center white-text light">Configurações Do Perfil</h1>

    <div class="row">
        <form action="controller/alterar.php" method="POST" class="col s12 m6 push-m3">
            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" autocomplete="off" style="color: white; font-weight: bold;" type="text" name="nome" class="validate">
                    <label for="first_name">Alterar Nome</label>
                </div>
                <div class="input-field col s11">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" autocomplete="off" style="color: white; font-weight: bold;" type="password" name="senha" class="validate">
                    <label for="password">Alterar Senha</label>
                    <span id="icon-password" style="color: white; font-size: 1.5rem; position: absolute; bottom: 20px; cursor: pointer;">
                        <i class="fa fa-eye fa-lg right" id="icon"></i>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <button class="btn green hoverable" type="submit" name="action">
                        Atualizar
                        <i class="material-icons right">refresh</i>
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