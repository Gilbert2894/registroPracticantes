
<script lang="JavaScript" src="../../js/administrador/jsUsuario.js" ></script>


	      <div class="row">



  <div class="col-md-6">

<div class="col-md-2"></div>
  <div class="col-md-8">
  	
  	<div class="panel panel-success panel panel-mio">
  		<div class="panel-heading ">
			    <h1 class="panel-title">Cambiar contraseña</h1>
		</div>
 		 <div class="panel-body">

 		 	 <form class="form-inline" id="frModificarContrasenia" method="POST">
	       
			 <p> <label for="">Ingrese su Contraseña actual:   </label>
			<input type="password"  class="form-control" id="contrasenia1" name="contrasenia1" /></p>

			 <p> <label for="">Ingrese la nueva Contraseña:    </label>
			<input type="password"  class="form-control" id="contrasenia2" name="contrasenia2" /></p>

			 <p> <label for="">Verifique la nueva contraseña:  </label>
			<input type="password"  class="form-control" id="contrasenia3" name="contrasenia3" /></p>
			
	          <br>
			<input type="submit" value="Cambiar Contraseña" class="submit btn btn-success"/>
		</form>

		 </div>
  	</div><!--panel panel-success -->
  	
  </div>
  <div class="col-md-2"></div>


  	
  </div><!--col-xs-6 -->
  
  <div class="col-md-6">
<div class="row">


<div class="col-md-2"></div>
  <div class="col-md-8">


  	<div class="panel panel-success panel panel-mio" >
  		<div class="panel-heading ">
			    <h1 class="panel-title">Cambiar Correo</h1>
		</div>

 		 <div class="panel-body">
		   <form class="form-inline" id="frModificarCorreo" method="POST">
	       
	       <p> <label for="">Ingrese su contraseña actual: </label>
					<br>
			<input type="password"  class="form-control" id="contrasenia" name="contrasenia" /></p>

			<p> <label for="">Ingrese su Correo nuevo:     </label>
					<br>
          
			<input type="text"  class="form-control" id="correoNuevo" name="correoNuevo" /></p>	

			<p> <label for=""></label></p>	
			


			
			
	          <br>
			<input type="submit" value="Cambiar Correo" class="submit btn btn-success"/>
		</form>
		    
		  </div>
  	</div><!--panel panel-success -->
  	
  </div>
  <div class="col-md-2"></div>


  	</div><!--row -->
  </div><!--col-xs-6 -->

</div><!--row -->
   

    


		<div class="modal fade show.bs.modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ajustes del Perfil</h4>
            </div>
            <div class="modal-body">
               <p> <div id="contenedorMensaje" ></div></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    






