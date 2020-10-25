<?php
//Destrucción de la sesión
session_start();
session_destroy(); //Función de php que destruye la sesión
header("Location:../index.php");
?>