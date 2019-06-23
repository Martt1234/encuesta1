<div class="row">
	<div class= "col-md-4"></div>
	<div class= "col-md-4">
		<div class="well"><!--sombreado-->
			<center>
				<br><br>
				<div id= "titulo1"><h1>Preguntas</h1></div>
				   <br><br>
                    <div class="container">
     <br><br>
       <!-- Button trigger modal -->
      <button type="button"  class="btn btn-outline-info"data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>
      	<a   class="btn btn-outline-success" href="<?php echo site_url('Controller1/actualizarpregunta');?>" role = "button">Modificar</a> 
           <a  class="btn btn-outline-danger" href="<?php echo site_url('');?>" role = "button">Eliminar</a>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redaccion de pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--con site url creas el enlace al controlador-->
         <form method="post" action="<?php echo site_url('')?>">
    <div class="form-group">
    <label for="exampleInputEmail1">Pregunta</label>
    <input type="Text" class="form-control" name = "" aria-describedby="emailHelp" placeholder="Escribe pregunta">
    </div>
   <br>
    <button type="submit"  class="btn btn-outline-info" value="Agregar">Agregar</button>
    </form>
      </div>
<div class="modal-footer">
        <button type="button"  class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
 
     </div>                             
         </center>
		</div>
	</div>
</div>
</body>
</html>