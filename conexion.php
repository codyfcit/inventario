<?php
// Establecer los datos de conexió

// Crear la conexión
$link= mysqli_connect ("127.0.0.1","root","","inventario");

/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}

//obtener los datos de los productos
$nombre=$_POST["nombre"];
$talla=$_POST["talla"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$descripcion=$_POST["descripcion"];

 //consulta insert a mysql 
   //insert into nonbre de la tabla values variables de php
   $insertar="INSERT INTO producto(nombre,talla,precio,cantidad,descripción	)
   VALUES('$nombre','$talla','$precio','$cantidad','$descripcion')";

    //corroborar
    if (mysqli_query($link,$insertar)){
        echo "datos insertados ecxitosamente";
    }else{  
        echo "error".mysqli_error($link);
    }
    mysqli_close($link);

?>