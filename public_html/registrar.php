<?php
session_start();
//print_r($_POST);

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';
	
    if (isset($_POST['signin'])) {
        
        //$tipo_vende= $_POST['signin']['check_vendedor'];

        $param = [
            'nombre' => $_POST['signin']['nombre'],
            'correo' => $_POST['signin']['correo'],
            'passw' => password_hash($_POST['signin']['password'], PASSWORD_DEFAULT)
        ];
        
        //$errores = Authentification($pdo, $user, $contra);
         
        if (isset($_POST['signin']['check_vendedor'])) {
            
            insert($pdo,'vendedores',$param);
            $mensaje= "Vendedor ingresado con éxito";
            print $mensaje;
        }
        else {
            insert($pdo,'clientes',$param);
            $mensaje= "Cliente ingresado con éxito";
            print $mensaje;
        }
        
        
	} else {

        if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
            include __DIR__ . '/../Templ2/registro_L.html.php';
        } else {
            include __DIR__ . '/../Templ2/registro.html.php';
        }
        
    }
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}