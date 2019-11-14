<?php 

	class Ingreso
	{
		public function ingresoController()
		{
			if(isset($_POST["usuarioLogin"]))
			{

				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioLogin"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["claveLogin"]))
				{
					#$encriptar = crypt($_POST["passwordIngreso"],'$2a$07$usesomesillystringforsalt$');

					$datosController = array("usuario"=>$_POST["usuarioLogin"],"password"=>$_POST["claveLogin"]);
					$respuesta = IngresoModels::ingresoModel($datosController, "usuario");

					if($respuesta["usuario"] == $_POST["usuarioLogin"] && 
					$respuesta["clave"] == $_POST["claveLogin"])
					{
						session_start();

						$_SESSION["validar"] = true;
						$_SESSION["usuario"] = $respuesta["usuario"];

						header("location:index.php?action=inicio");
					}
					else
					{

						echo '<div class="alert alert-danger">error al intentar ingresar </div>';
					}
				}
			}
		}
	}
 ?>