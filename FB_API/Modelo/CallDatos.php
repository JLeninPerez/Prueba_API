<?php
	
	require_once('../Controlador/Conexion.php');

	try {
		$Token = $Help->getAccessToken();
	} catch (\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Graph Error: " . $e->getMessage();
		exit();
	} catch (\Facebook\Exceptions\FacebookSDKException $e) {
		echo "SDK Error: " . $e->getMessage();
		exit();
	}

	if (!$Token) {
		header('Location: ../Index.php');
		exit();
	}

	$oAuth2Client = $FB_OBJ->getOAuth2Client();
	
	if (!$Token->isLongLived()){
		$Token= $oAuth2Client->getLongLivedAccessToken($Token);
	}

	
	$Respuesta= $FB_OBJ->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $Token);
	$USER= $Respuesta->getGraphNode()->asArray();
	$_SESSION['USER'] = $USER;		
	$_SESSION['Token'] = (string) $Token;		
	header('Location: ../Index.php');	
	exit();

?>

