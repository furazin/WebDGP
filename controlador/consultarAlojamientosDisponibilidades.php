<?php


    include("modelo/modelo.php");
	$con = conectar();
	if (!$con) {
     die('Could not connect: ' . mysql_error());
    }
	
	$db=selectDB();
    if (!$db) {
     die('Could not select database: ' . mysql_error());
    }
	
	
	$result = consultarDisponibilidades();
    if (!$result) {
      die('Could not select: ' . mysql_error());
    }
    
    include "vista/vistaConsultarAlojamientosDisponibilidades.php";    
	
    mysql_close($con);


?>