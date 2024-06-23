<!DOCTYPE html>
<!-- saved from url=(0032)https://www.mercadolibre.com.ar/ -->
<html lang="es-AR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?=isset($title) ? $title : "MercadoFree" ?></title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="./styles/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./styles2/styles.css">
    <link rel="stylesheet" href="./styles2/navbar.css">
    <link rel="stylesheet" href="./styles2/footer.css">
    <link rel="stylesheet" href="./styles2/carro.css">
    <link rel="stylesheet" href="./styles2/card.css">
    <link rel="stylesheet" href="./styles2/header.css">
    <link rel="stylesheet" href="./styles2/products_section.css">
    <title>Operación Exitosa</title>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="./styles2/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="./styles2/style_checkout.css">
    <link rel="stylesheet" href="./styles2/responsive.css">
    <!Estilo agregado para el icono del menu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" language="javascript" src="./js/add_car.js"></script>

</head>

<body>
    
    <?php
        include __DIR__ . '/../Templ2/header_L.html.php';
    ?>

<!-- ********************************************************************* -->
    
  <!--Page Wrapper-->
      <div class="page-wrapper">

    <!--Body Container-->
    <div id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title" style="font-size: 30px;">Operación Exitosa</h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="./index.php" title="Back to the home page">Continuar explorando</a><span>|</span><span class="fw-bold">Operación Exitosa</span></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Main Content-->
        <div class="container">
            <div class="checkout-success-content py-2">
                <!--Order Card-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="checkout-scard card border-0 rounded">
                            <div class="card-body text-center">
                                <p class="card-icon"><i class="fa fa-shopping-bag fa-3x"></i></p>
                                <h4 class="card-title">¡Gracias por su pedido!</h4>
                                <p class="card-text mb-1">Usted recibirá la confirmación de su pedido por email con los detalles de su orden y un link para seguir el progreso.</p>
                                <p class="card-text mb-1">Toda la información necesaria acerca de la entrega, será enviada al email</p>
                                <p class="card-text text-order badge bg-success my-3">El número de orden es: <b><?=$ultima_compra['id_compra']?></b></p>
                                <p class="card-text mb-0">Fecha de la orden: <?=$ultima_compra['fecha']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Order Card-->
                <!--Order Summary-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="checkout-item-ordered">
                            <h2 class="fs-6 mb-3">Resumen de la orden</h2>
                            <div class="table-content table-responsive order-table mb-4">
                                <table class="table table-bordered align-middle table-hover text-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="fw-bold">Imagen</th>
                                            <th class="text-start fw-600">Nombre del producto</th>
                                            <th class="fw-600">Precio</th>
                                            <th class="fw-600">Ctd</th>
                                            <th class="fw-600">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            for ($i=0; $i < count($carrito); $i++) { 
                                                include __DIR__ . '/../Templ2/item_checkout.html.php';
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="item subtotal text-end fw-bolder" style="font-size: 15px;">Subtotal:</td>
                                            <td class="fw-500 last" style="font-size: 15px;">$<?=number_format($total)?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="item tax text-end fw-bolder" style="font-size: 15px;">Impuestos:</td>
                                            <td class="fw-500 last" style="font-size: 15px;">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="item discount text-end fw-bolder" style="font-size: 15px;">Descuento:</td>
                                            <td class="fw-500 last" style="font-size: 15px;">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="item shipping text-end fw-bolder" style="font-size: 15px;">Envío:</td>
                                            <td class="fw-500 last" style="font-size: 15px;">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="item total text-end fw-bolder" style="font-size: 15px;">Total:</td>
                                            <td class="fw-500 last" style="font-size: 15px;">$<?=number_format($total)?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="ship-info-details shipping-method-details">
                            <div class="row g-0">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="shipping-details mb-4 mb-sm-0 clearfix">
                                        <h3>Direc. Envio</h3>
                                        <p style="font-size: 15px;">No 40 Gallaxy Enque Street 133/2,</p>
                                        <p style="font-size: 15px;">Capital Federal, CABA</p>
                                        <p style="font-size: 15px;">Argentina</p>
                                        <p style="font-size: 15px;">CO1141</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="d-flex-wrap w-100 mt-4 text-center">
                            <a href="./index.php" class="d-inline-flex align-items-center btn btn-outline-primary rounded" style="font-size: 13px;"><i class="fa fa-angle-left"></i>Continue Comprando</a>
                            <button type="button" class="d-inline-flex align-items-center btn rounded btn-dark" style="font-size: 13px;"><i class="fa fa-print"></i>Imprimir orden</button>
                            <button type="button" class="d-inline-flex align-items-center btn rounded btn-dark" style="font-size: 13px;"><i class="fa fa-repeat"></i>Ordenar nuevamente</button>
                        </div>
                    </div>
                </div>
                <!--End Order Summary-->
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!--End Body Container-->



    </div>
    <!--End Page Wrapper-->

<!-- ********************************************************************* -->
    <app-footer  _nghost-ng-c920763379="">
        <div  id="footer" class="container">
            <footer  class="py-3 my-4">
                <ul  class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p  class="text-center text-body-secondary">© 2023 Company, Inc</p>
            </footer>
        </div>
    </app-footer>

      <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js” ></script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” ></script>
</body>