<?php
//conexion a mysql

$link= mysqli_connect("localhost","root","","inventario");

//recoger el valor del html
$clave = $_POST["clave"];

//consulta eliminar
$elimina="delete from producto where id='$clave'";
if (mysqli_query($link,$elimina)){
    echo '<script type="text/javascript">
    alert("delete successfully");
    window.location.hreft="consulta.php";
    </script>
    ';
}else {
    echo "error".mysqli_error($link);
}

mysqli_close($link);
?>