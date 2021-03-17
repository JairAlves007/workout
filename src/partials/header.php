    <!-- Header -->

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper deep-purple darken-2">
                <!-- Logo -->
                <a href="home.php" class="brand-logo center">
                    <img src="assets/img/logo.png" alt="Logo" class="logo">
                </a>

                <!-- Ícone para abrir no Mobile -->
                <a href="#" data-target="mobile-navbar" class="sidenav-trigger menu-icon">
                    <i class="material-icons">menu</i>
                </a>

                <ul id="navbar-items" class="left hide-on-med-and-down">
                    
                    <li>
                        <a href="favoritos.php">
                            Favoritos
                            <i class="material-icons right">favorite_border</i>
                        </a>
                    </li>

                    <li id="li-acoes">
                        <a class="dropdown-trigger center" data-target="dropdown-acoes" href="#">
                            Ações
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                            Configurações
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>

                <!-- Dropdown -->
                <ul id="dropdown-acoes" class="dropdown-content">
                    
                    <li>
                        <a href="alta.php">
                            Ver Produtos
                            <i class="material-icons left">search</i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="adicionarProduto.php">
                            Inserir Produtos
                            <i class="material-icons left">add_shopping_cart</i>
                        </a>
                    </li>

                    <li>
                        <a href="carrinho.php">
                            Ver Carrinho
                            <i class="material-icons left">shopping_cart</i>
                        </a>
                    </li>
                </ul>

                <ul id="dropdown-menu" class="dropdown-content">
                    <li>
                        <a href="configuracoes.php">
                            Editar Perfil
                            <i class="material-icons left">edit</i>
                        </a>
                    </li>

                    <li>
                        <a href="controller/logout.php">
                            Logout
                            <i class="material-icons left">exit_to_app</i>
                        </a>
                    </li>
                </ul>

                <form action="search.php" method="POST" class="right input-hide">
                    <div class="input-field">
                        <input id="search" autocomplete="off" type="search" name="search" required>
                        <label class="label-icon" for="search">
                            <button class="btn-search" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </label>
                        <i class="material-icons">close</i>
                    </div>
                </form>

            </div>
        </nav>
    </div>

    <!-- Menu Mobile -->

    <ul id="mobile-navbar" class="sidenav">
        <form action="search.php" method="POST">
            <div class="input-field">
                <input id="input-search-menu_mobile" autocomplete="off" name="search" type="search" required>
                <label class="label-icon" for="search">
                    <button class="btn-search search-menu_mobile" type="submit">
                        <i class="material-icons">search</i>
                    </button>
                </label>
                <i class="material-icons" class="search-menu_mobile">close</i>
            </div>
        </form>

        <li>
            <a href="favoritos.php">
                Favoritos
                <i class="material-icons left">favorite</i>
            </a>
        </li>

        <li>
            <a href="alta.php">
                Ver Produtos
                <i class="material-icons left">search</i>
            </a>
        </li>

        <li>
            <a href="adicionarProduto.php">
                Inserir Produtos
                <i class="material-icons left">add_shopping_cart</i>
            </a>
        </li>

        <li>
            <a href="carrinho.php">
                Ver Carrinho
                <i class="material-icons left">shopping_cart</i>
            </a>
        </li>

        <li>
            <a href="configuracoes.php">
                Alterar Perfil
                <i class="material-icons left">edit</i>
            </a>
        </li>

        <li>
            <a href="controller/logout.php">
                Logout
                <i class="material-icons left">exit_to_app</i>
            </a>
        </li>
    </ul>