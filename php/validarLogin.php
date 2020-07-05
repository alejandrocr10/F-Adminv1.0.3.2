<?php 
session_start();

include 'conexion.php';

$usuario = $_POST['correo'];
$clave =  $_POST['passw'];
$nivel=$_POST['nivel'];

$proceso = $conexion->query("SELECT * FROM usuarios WHERE correo ='$usuario' and passw ='$clave' and nivel = '$nivel'");
$resultado = mysqli_query($conexion, $proceso);

    if ($resultado = mysqli_fetch_array($proceso)){
        
        $_SESSION['usuario'] = $resultado[1].' '.$resultado[2];//DECLARACION DE VARIABLE DE SESION
        $_SESSION['nivel']=$nivel;   
        header("location:../index.php");
    }else{
        header('location:../login.php');
    }




mysqli_free_result($resultado);
mysqli_close($conexion);

?>