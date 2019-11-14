<?php 

	class Registro
	{
		public function registroController()
		{

			if(isset($_POST["IdentificacionRegistro"]))
			{
				#preg_match = realiza una comparación con una expresion regular


				$encriptar = crypt($_POST["claveRegistro"],'$2a$07$usesomesillystringforsalt$');

				$datosController = array("identificacion"=>$_POST["IdentificacionRegistro"],"usuario"=>$_POST["usuarioRegistro"],"clave"=>$encriptar,"email"=>$_POST["emailRegistro"], "nombre"=>$_POST["nombreRegistro"], "apellido"=>$_POST["apellidoRegistro"],"telefono"=>$_POST["telefonoRegistro"], "sexo"=>$_POST["sexoRegistro"],"edad"=>$_POST["edadRegistro"], "ciudad"=>$_POST["ciudadRegistro"],"direccion"=>$_POST["direccionRegistro"]);


				$respuesta = Datos::registroUsuarioModel($datosController,"usuario");

				if($respuesta == "succes")
				{
					header("location:index.php?action=ok");
				}
				else
				{
					header("location:index.php?action=fallo");
				}
			}
		}
	}
?>