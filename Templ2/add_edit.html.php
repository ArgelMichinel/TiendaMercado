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
    <link rel="stylesheet" href="./styles2/edit.css">
    <link rel="stylesheet" href="./styles2/carrito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>

</head>

        <nav  class="navbar navbar-expand-lg bg-body-tertiary p-4">
            <div  class="container"><a  class="navbar-brand"
                    ng-reflect-router-link="/dashboard" href="/dashboard"><i 
                        class="fa fa-arrow-right-from-bracket fa-rotate-180 fa-xl"></i></a></div>
        </nav>
        <div  class="container-fluid d-flex flex-row justify-content-center bg-light p-4">
            <h3  class="dashboard__operacion">Agregar / Editar </h3>
        </div>
        <div  class="container mt-5">
            <div  class="card mb-3 border border-0 mx-auto">
                <div  class="card-body">
                    <form  action="./vender.php" method="post">
                        <input type="text" class="input_edit" name="producto[id_producto]" value="<?=isset($producto['id_producto']) ? $producto['id_producto'] : ''?>" style="display: none;">
                        <input type="text" placeholder="Nombre" class="input_edit" name="producto[nombre]" value="<?=isset($producto['nombre']) ? $producto['nombre'] : ''?>" required>
                        <input type="number" placeholder="Precio" class="input_edit" name="producto[precio]" value="<?=isset($producto['precio']) ? $producto['precio'] : ''?>" required>
                        <input type="text" placeholder="Descripción" class="input_edit" name="producto[descripcion]" value="<?=isset($producto['descripcion']) ? $producto['descripcion'] : ''?>" required>
                        <input type="number" placeholder="Cantidad" class="input_edit" name="producto[cantidad]" value="<?=isset($producto['cantidad']) ? $producto['cantidad'] : ''?>" required>
                        <input type="text" placeholder="Url Image" class="input_edit" name="producto[imagen]" value="<?=isset($producto['ruta']) ? $producto['ruta'] : ''?>" required>
                        <button type="submit" class="btn btn-success"> Aceptar</button>
                        <a href="./vender.php" ><button class="btn btn-info">Volver</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
