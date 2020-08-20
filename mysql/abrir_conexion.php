<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "condominio";    // sera el valor de nuestra BD 
	$usuariodb = "ramon";    // sera el valor de nuestra BD 
	$clavedb = "12345";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "propietario"; 	   // tabla de usuarios --- DECLARA VARIABLE
	

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos); //ACA DECLARA LA  VARIABLE CONEXION


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>