<?php
	$dbHost = "localhost";
	$dbUsuario = "root";
	$dbPassword = "";
	$db = "srlm";

	$conexion = mysql_connect ($dbHost, $dbUsuario, $dbPassword) or die ("Ha fallado la conexión");

	mysql_select_db ($db, $conexion) or die ('Error al seleccionar la Base de Datos: '.mysql_error());
?>
