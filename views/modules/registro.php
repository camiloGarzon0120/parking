<div class="wrapper row2">

		<div class="container">
		  <div class="row align-items-center">
		    <div class="col col-sm-3"> </div>
		    <div class="col col-sm-6">
		    	<h4 class="text-center">Registro</h4>
		    	<hr>
		    	<form method="post" onsubmit="return validarRegistro()">
		    	  <div class="form-row">
		    	  	<div class="form-group col-md-3"></div>
		    	  	<div class="form-group col-md-6">
					<label for="IdentificacionRegistro">Identificación</label>
					<input type="text" class="form-control" id="IdentificacionRegistro" name="IdentificacionRegistro" placeholder="Identificación">
					</div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="usuarioRegistro">Nombre de usuario</label>
				      <input type="text" class="form-control" id="usuarioRegistro" name="usuarioRegistro" placeholder="Usuario">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="claveRegistro">Contraseña</label>
				      <input type="password" class="form-control" id="claveRegistro" name="claveRegistro" placeholder="Contraseña">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="emailRegistro">Email</label>
				    <input type="email" class="form-control" id="emailRegistro" name="emailRegistro" placeholder="Ejemplo@hotmail.com">
				  </div>
				  
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="nombreRegistro">Nombres</label>
				      <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro" placeholder="Nombres">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="apellidoRegistro">Apellidos</label>
				      <input type="text" class="form-control" id="apellidoRegistro" name="apellidoRegistro" placeholder="Apellidos">
				    </div>
				  </div>

				  <div class="form-row">
					  <div class="form-group col-md-6">
					    <label for="telefonoRegistro">Teléfono celular</label>
					    <input type="text" class="form-control" id="telefonoRegistro" name="telefonoRegistro" placeholder="+57 ">
					  </div>
				  </div>

				  <small for="info"class="text-muted">campos opcionales</small>
				  <hr id="info">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="sexoRegistro">Sexo</label>
				      <input type="text" class="form-control" id="sexoRegistro" name="sexoRegistro" placeholder="Sexo">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="edadRegistro">Edad</label>
				      <input type="text" class="form-control" id="edadRegistro" name="edadRegistro" placeholder="Edad">
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="ciudadRegistro">Ciudad residencia</label>
				      <input type="text" class="form-control" id="ciudadRegistro" name="ciudadRegistro" placeholder="Ciudad residencia">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="direccionRegistro">Dirección residencia</label>
				      <input type="text" class="form-control" id="direccionRegistro" name="direccionRegistro" placeholder="Dirección residencia">
				    </div>
				  </div>
				  <br>
				  <div class="row">
				  	<div class="col col-sm-12">
				  		<input class="form-control btn btn-primary" type="submit" value="Registrar">
				  	</div>
				  </div>

				</form>
				<br>
				<?php

					$registro = new Registro();
					echo $registro->registroController();

					if(isset($_GET['action']))
					{
						if($_GET['action'] == "ok")
						{
							echo "registro exitoso";
						}
					}
				?>
		    </div>
		    <div class="col col-sm-3">
		    </div>
		  </div>
		</div>
	</article>
</div>