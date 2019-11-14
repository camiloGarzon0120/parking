<?php 

	class EnlacesModels
	{
		public function enlacesModel($enlaces)
		{
			if($enlaces == "inicio" || $enlaces == "login" || $enlaces == "registro" || $enlaces == "reservaLavado" || $enlaces == "reservaParqueo" || $enlaces == "registroVehiculo" || $enlaces == "EditarPerfil")
			{
				$module = "views/modules/".$enlaces.".php";
			}
			else if($enlaces == "ok")
			{
				$module = "views/modules/registro.php";
			}
			else if($enlaces == "fallo")
			{
				$module = "views/modules/registro.php";
			}
			else
			{
				$module = "views/modules/inicio.php";
			}

			return $module; 
		}
	}
 ?>