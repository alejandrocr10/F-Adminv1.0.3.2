<?php

$host="localhost";
$user="root";
$pass="";
$db="f&admin";

$conexion=mysqli_connect($host,
                        $user,
                        $pass,
                        $db);
                        if (!$conexion) {
                            echo "Error al conectar base de datos";
                            } 
                            
	
?>