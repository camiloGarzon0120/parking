
<div class="wrapper row2">

		<div class="container">
		  <div class="row align-items-center">
		    <div class="col col-sm-4"> </div>
		    <div class="col col-sm-4">
		      <div class="card text-center" style="width: 28rem;">
			  <div class="card-body">
			    <h5 class="card-title">Iniciar sesión</h5><form method="post" id="formIngreso">
				  <div class="form-group">
				    <label for="usuarioLogin">Usuario</label>
				    <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin" placeholder="Ingrese su usuario">
				  </div>
				  <div class="form-group">
				    <label for="claveLogin">Contraseña</label>
				    <input type="password" class="form-control" id="claveLogin" name="claveLogin" placeholder="Ingrese su contraseña">
				  </div>
				  <br>
				  <div class="form-group">
				  	<a href="#">¿Olvidaste tu contraseña?</a>
				  	<br>
				    <a href="#">¿No tiene una cuenta? Cree una</a>
				  </div>
				  <br>
				  <?php 

					$ingreso = new Ingreso();
					$ingreso->ingresoController();

				  ?>
				  <input class=" btn btn-primary" type="submit" value="Iniciar">
				  
				</form>
			  </div>
			</div>
		    </div>
		    <div class="col col-sm-4">
		    </div>
		  </div>
		</div>
	</article>
</div>