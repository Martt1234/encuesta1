<div class="row">
  <div class= "col-md-4"></div>
  <div class= "col-md-4">
    <div class="well"><!--sombreado-->
      <center>
        <br><br>
        <div id= "titulo1"><h1>Preguntas</h1></div>
           <br><br>
                    <div class="container">
     
       <!-- Button trigger modal -->
      <button type="button"  class="btn btn-outline-info"data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>

        <a   class="btn btn-outline-secondary" href="<?php echo site_url('Controller1/actualizarpreg');?>" role = "button">Actualizar</a>

      <a   class="btn btn-outline-danger" href="<?php echo site_url('Controller1/borrarpreg');?>" role = "button">Eliminar</a>
           <br><br>
           <!--enlace que te regresa a la pagina de principal-->
           <a href="<?php echo site_url('Controller1/index');?>" style="color:#154360"><strong><u>Volver al inicio</u></strong></a>
           <br><br>
       
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
         <form method="post" action="<?php echo site_url('Controller1/altaPregunta')?>">
    <div class="form-group">
    <label for="exampleInputEmail1">Pregunta</label>
    <input type="Text" class="form-control" name = "descripcion" aria-describedby="emailHelp" placeholder="Escribe tu pregunta">
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