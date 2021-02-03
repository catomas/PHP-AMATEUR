<?php

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password= $PASSWORD_MYSQLENV;  // La contraseña esta en una variable de ambiente por temas de seguridad
$dbname="registro";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

?>