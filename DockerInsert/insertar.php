<?php
include 'conexion.php';

if (isset($_POST['NombreEstudiante']) && !empty($_POST['NombreEstudiante']) &&
    isset($_POST['ApellidoEstudiante']) && !empty($_POST['ApellidoEstudiante']) &&
    isset($_POST['EdadEstudiante']) && !empty($_POST['EdadEstudiante']))
{
    
    $con = mysqli_connect($host,$user,$pw)or die("Problemas al Conectar");
    mysqli_select_db($con,$db)or die ("Problemas al conectar la Base de Datos");
    
    mysqli_query($con,"INSERT INTO alumno (Nombre,Apellido,Edad) Values ('$_POST[NombreEstudiante]','$_POST[ApellidoEstudiante]','$_POST[EdadEstudiante]')");
    echo "Datos Registrados Correctamente";
    mysqli_close($con);
}else{
    echo "Problemas al Almacenar el Registro";
}


?>

