<?php
session_start();

if (isset($_SESSION['usuario']) and $_SESSION['nivel']) {
	header('Location: main.php');
}else{
	header('Location: LoginP.php');
}
?>