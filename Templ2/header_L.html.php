<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container p-4"><a href="#" class="navbar-brand fw-bold"><img src="./img2/mercadofree-logo.png"
                    alt="logo"> Mercado Free</a><button type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                aria-label="Toggle navigation" class="navbar-toggler"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class=" navbar-collapse collapse" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a aria-current="page" class="nav-link active" href="">Ofertas</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Especiales</a></li>
                </ul>
                <li class="d-flex">
                    <?php
                    if ($_SESSION['tipo'] == 'vendedores') {
                        echo ('<a class="nav-link" href="./vender.php">Vender</a>');
                    } else {
                        echo ('<a class="nav-link" href="./Carrito.php">Carrito</a>');
                    }
                    ?>
                <a class="nav-link" href="./logout.php">Logout</a></li>
                <form role="search" class="d-flex" style="width: 270px;"><input type="search" placeholder="Search"
                        aria-label="Search" class="form-control me-2"><button type="submit"
                        class="btn btn-outline-success">Search</button>
                    </form>
                <li class="d-flex2"><?=$_SESSION['nombre']?><i class="fa fa-user-circle" style="size: 24px;"></i></li>
            </div>
        </div>
    </nav>
</header>