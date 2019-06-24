<div class="row">
  <div class= "col-md-4"></div>
  <div class= "col-md-4">
    <div class="well"><!--sombreado-->
      <center>
        <br><br>
        <div id= "titulo3"><h1>Eliminar Pregunta</h1></div>
           <br><br>
            <!--enlace que te regresa a la pagina de principal-->
           <a href="<?php echo site_url('Controller1/index');?>" style="color:#154360"><strong><u>Volver al inicio</u></strong></a>
           <br><br>

           <table class="table">
       <thead class="thead-light">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Descripción pregunta</th>
          <th scope="col">Acción</th>
          </tr>
         </thead>
    <tbody>
      
        <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->descripcion; ?></td>

                 <td><a class="btn btn-outline-danger" href= "<?php echo site_url('Controller1/borrarPregunta'); ?>/<?php echo $row->id;?>"role="button">Borrar</a>
                <?php } ?>
     </tbody>
    </table>

           <div>
           </div>            
         </center>
    </div>
  </div>
</div>

</body>
</html>