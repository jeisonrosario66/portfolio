<?php
// Declaramos las variables de conexión
$ServerName = "localhost";
$Username = "root";
$Password = "root";
$NameBD = "portafolio";

// Creamos la conexión con MySQL
$conex = mysqli_connect($ServerName, $Username, $Password);
mysqli_set_charset($conex, "utf8"); 

// Revisamos la Conexión MySQL
/*
if ($conex) {
    echo "Conectado correctamente</br>";
} else {
    echo "Conectado erróneamente</br>";
} ; 
?>
*/
