<?php
    session_start();

    if(isset($_SESSION['logado'])){
        header('Location: home.php');
    }
?>

<?php
    include_once("partials/head.php");
?>

    <title>Faça Seu Login</title>

<?php
    include_once("partials/end_head.php");
?>

    <h1 class="white-text center light">Faça Seu Login</h1>

    <div class="row">
        <form action="controller/login.php" method="POST" class="col s12 m6 push-m3">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" style="color: white;" autocomplete="off" type="email" name="email" class="validate" required="required">
                    <label for="email">Email</label>
                </div>
                
                <div class="input-field col s11" style="position: relative;">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" style="color: white; font-weight: bold;" id="senha" autocomplete="off" type="password" name="senha" class="validate" required="required">
                    <label for="password">Senha</label>
                    <span id="icon-password" style="color: white; font-size: 1.5rem; position: absolute; bottom: 20px; cursor: pointer;">
                        <i class="fa fa-eye fa-lg right" id="icon"></i>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <button class="btn hoverable green" type="submit" name="action">
                        Login
                        <i class="material-icons right">send</i>
                    </button>
                    
                    <a href="cadastrar.php" class="btn hoverable light-blue right">
                        Cadastre-se
                        <i class="material-icons left">assignment_ind</i>
                    </a>
                </div>
            </div>
        </form>
    </div>
        
<?php
    include_once("partials/footer.php");
?>

    <script src="assets/js/main.js"></script>

<?php
    include_once("partials/scripts.php");
?>