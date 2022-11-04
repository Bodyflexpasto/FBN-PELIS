<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456789";
$dbname = "fbn-pelis";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("No se pudo conectar!");
}
?>