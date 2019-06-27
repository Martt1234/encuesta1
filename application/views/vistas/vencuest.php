<div class="row">
  <div class= "col-md-4"></div>
  <div class= "col-md-4">
    <div class="well"><!--sombreado-->
      <center>
        <br><br>
        <div id= "titulo1"><h1>AGREGAR CUESTIONARIO</h1></div>
           <br><br>
                    <div class="container">
     
       <!-- Button trigger modal -->
      <button type="button"  class="btn btn-outline-info"data-toggle="modal" data-target="#exampleModal">
        Crear
      </button>
           <br><br>
           <!--enlace que te regresa a la pagina de principal-->
           <a href="<?php echo site_url('Controller1/index');?>" style="color:#154360"><strong><u>Volver al inicio</u></strong></a>
           <br><br>
       
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nombre del Cuestionario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--con site url creas el enlace al controlador-->
         <form method="post" action="<?php echo site_url('Controller1/nuevoCuest')?>">
    <div class="form-group">
     <!--aqui ingresas el nombre del cuestionario de tipo texto-->
    <input type="Text" class="form-control" name = "nomenc" aria-describedby="emailHelp" placeholder="Ingresa nombre del Cuestionario">
    </div>
    <div class="form-group">
   <br>
    <!--con el boton de tipo submit ingresas el nombre-->
    <button type="submit"  class="btn btn-outline-info" value="agregar">Agregar</button>
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