<?php
    include_once("partials/head.php");
?>
    <title>Seu Cadastro</title>

<?php
    include_once("partials/end_head.php");
?>

    <div class="row">
        <form action="controller/cadastro.php" method="POST" class="col s12 m6 push-m3">

            <h1 class="light white-text center">Faça Seu Cadastro</h1>

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nome_prefix" autocomplete="off" style="color: white; font-weight: bold;" type="text" name="nome" class="validate" required="required">
                    <label for="nome_prefix">Nome</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email_prefix" autocomplete="off" style="color: white; font-weight: bold;" type="email" name="email" class="validate" required="required">
                    <label for="email_prefix">Email</label>
                </div>

                <div class="input-field col s5">
                    <i class="material-icons prefix">lock</i>
                    <input id="password_prefix" autocomplete="off" style="color: white; font-weight: bold;" type="password" name="senha" class="validate" required="required">
                    <label for="password_prefix">Senha</label>
                    <span id="icon-password" style="color: white; font-size: 1.5rem; position: absolute; bottom: 20px; cursor: pointer;">
                        <i class="fa fa-eye fa-lg right" id="icon"></i>
                    </span>
                </div>

                <div class="input-field col s6 offset-s1">
                    <i class="material-icons prefix">phonelink_ring</i>
                    <input id="phone_prefix" autocomplete="off" style="color: white; font-weight: bold;" type="number" name="telefone" class="validate" required="required">
                    <label for="phone_prefix">Telefone</label>
                </div>
            </div>
                
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="btn green hoverable">
                        Cadastrar
                        <i class="material-icons right">send</i>
                    </button>
                    <a href="index.php" class="btn cyan hoverable right">
                        Já Possuo Uma Conta
                        <i class="material-icons left">keyboard_arrow_left</i>
                    </a>
                </div>
            </div>
        </form>
    </div>

<?php
    include_once("partials/footer.php");
?>