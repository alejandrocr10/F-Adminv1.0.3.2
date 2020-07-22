<?php

if (isset($_SESSION['usuario'])) {
}else{
	header('Location: LoginP.php');
}

?>