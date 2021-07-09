<?php
include("include/conexion.php"); //incluye la conecxion a la BD  ---> me traigo la variable  $enlace


// validar si se reciven los datos  ---> RECIVIR 

if (isset($_POST['guardando_datos'])) {
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $nombre = $_POST['nombre'];     
    $rut = $_POST['rut'];
    $ano_ingreso = $_POST['ano_ingreso'];

        //GUARDANDO LA INFO DE ALUMNO
    $query = "INSERT INTO  alumno (apa_alumno,ama_alumno,nom_alumno,rut_alumno,ano_ingreso) 
    VALUES ('$apellido_paterno', '$apellido_materno','$nombre','$rut','$ano_ingreso')";
    $resultado = mysqli_query($enlace, $query);
    if (!$resultado) {
        die("error de  Query");
    }
    echo ("Ingresado correctamente");
}
?>