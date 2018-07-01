<?php
	
	session_start();

	$Configurar= parse_ini_file('../config.ini',true);

	foreach ($Configurar as $key => $Valor) {
		switch ($key) {
			case 'URL':
			$Direccion= $Valor;
			break;
		case 'app_id':
			$ID= $Valor;
			break;
		case 'app_secret':
			$PASS= $Valor;
			break;
		}
	}

	require_once('../Facebook/autoload.php');

	$FB_OBJ= new \Facebook\Facebook([
		'app_id' => $ID,                        
		'app_secret' => $PASS,	  
		'default_graph_version' => 'v3.0'
	]);

	$Help= $FB_OBJ->getRedirectLoginHelper();

?>