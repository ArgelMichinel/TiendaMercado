<?php
session_start();

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';

    
    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
        IsLogged($pdo);
        //header('Location: index.php');
        //die();
        
	} 

    if ($_SESSION['tipo'] == 'clientes') {
        
        $data = json_decode(file_get_contents('php://input'), true);

        if (isset($data['agregar'])) {
            $fields = [
                "id_cliente" => $_SESSION['id'],
                "id_producto" => $data['agregar'][0],
                "cantidad" => $data['agregar'][1]
            ];

            insert($pdo, 'carrito', $fields);

            echo('Agregada '. $fields["cantidad"] . ' unidad(es) del producto id=' . $fields["id_producto"]);

        } elseif (isset($data['eliminar'])) {
            
            

        } else {
            $id_cliente = $_SESSION['id'];
            
            $carro = find_carro_cliente($pdo,$id_cliente);

            $carrito = [];
            $total = 0;

            for ($i=0; $i < count($carro); $i++) { 

                $aux = findByIdProd($pdo,$carro[$i]['id_producto']);

                $carrito[$i] = [
                    "id" => $carro[$i]["id"],
                    "id_producto" => $carro[$i]["id_producto"],
                    "cantidad" => $carro[$i]["cantidad"],
                    "nombre" => $aux["nombre"],
                    "precio" => $aux["precio"],
                    "id_vendedor" => $aux["id_vendedor"],
                    "descripcion" => $aux["descripcion"],
                    "ruta" => $aux["ruta"]

                ];

                $total = $total + $aux["precio"]*$carro[$i]["cantidad"];

            }

            include __DIR__ . '/../Templ2/carrito.html.php';

        }

    }

    
    
    
	
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}