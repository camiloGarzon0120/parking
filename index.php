<?php 

	require_once  "models/enlaces.php";
	require_once  "models/login.php";
	require_once  "models/registro.php";

	
	require_once  "controllers/template.php";
	require_once  "controllers/enlaces.php";
	require_once  "controllers/login.php";	
	require_once  "controllers/registro.php";	

	$template = new TemplateController();
	$template->template();
	
 ?>