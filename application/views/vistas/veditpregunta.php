<div class=" container">

  <div class="row">
  <div class= "col-md-4"></div>
  <div class= "col-md-4">
    <br><br>
    <div id = "titulo4"><h1>Editar Pregunta</h1></div>

    <!--Creamos de nuevo el formulario-->
     <form method="post" action="<?php echo site_url('Controller1/updatepreg')?>/<?php echo $row->id; ?>">
     <div class="form-group">
        <br><br>
     <label for="exampleInputEmail1">Pregunta</label>
     <input type="Text" class="form-control" name = "descripcion" value="<?php echo $row->descripcion; ?>"aria-describedby="emailHelp" placeholder="Escribe tu pregunta">
       </div>
     <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button>
     <button type="submit"   class="btn btn-outline-danger" value="Cancelar">Cancelar</button>
     </form>
  </div>
</div>

</div>  
</body>
</html>