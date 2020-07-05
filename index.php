<?php
session_start();

if (isset($_SESSION['usuario']) and $_SESSION['nivel'] == 1 ) {
	header('Location: main.php');
}elseif(isset($_SESSION['usuario']) and $_SESSION['nivel'] == 2 ) {
	header('Location: main.php');
}elseif(isset($_SESSION['usuario']) and $_SESSION['nivel'] == 3 ) {
	header('Location: main.php');
}else{
	header('Location: Login.php');
}
?>