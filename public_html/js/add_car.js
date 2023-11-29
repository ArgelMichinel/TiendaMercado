function add_carrito(id_prod, cant) {

  var datos = {agregar : [id_prod, cant]};

  var Ajax;

    Ajax=new XMLHttpRequest();

    Ajax.onreadystatechange = function() {
        
        if (Ajax.readyState==4 && Ajax.status==200) {

            console.log(Ajax.responseText);
            
        }

    }

    let datos2 = JSON.stringify(  datos );
    //console.log(datos);
    Ajax.open("POST","./carrito.php",true);
    Ajax.setRequestHeader("Content-Type","application/json");
    Ajax.send( datos2 );
  
}