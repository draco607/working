<div class="col-md-10">
<div class="panel panel-primary" id="div-panel-gestion">
    <div class="panel-heading" id="paneles-gestion">
      <h3 class="panel-title">Tabla general</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
  <table class="table table-bordered table-condensed" id="tabla_lista_paises">
    <thead> 
                    <tr>
                        <th><center>CODIGO DE MATERIA</center></th><!--Estado-->
                        <th><center>NOMBRE</center></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                
    <tbody>
                    <?php

     
                   for($i=0;$i<sizeof($datos);$i++)
                   {
                               echo '<tr>';
                               echo '<td >'.$datos[$i]['id_materia'].'</td>';
                               echo '<td>'.$datos[$i]['descrip'].'</td>';
                              ?>
                            <td><a id="btn-listado-equipos" type="button" class="btn btn-default" href="Registros-GetMat-<?php echo $datos[$i]['id_materia']; ?>.html"><i style="color: rgba(0, 182, 60, 0.9);" class="fa fa-pencil-square-o fa-lg"></i></a></td>
                              
                            <td><a id="btn-listado-equipos" type="button" class="btn btn-default" href="Registros-Delete-<?php echo $datos[$i]['id_materia']; ?>.html"><i style="color: rgba(200, 0, 0, 1);" class="fa fa-trash-o fa-lg"></i></a></td>


                              <?php  
                               echo '</tr>';
                     
                        }

                    ?>
                <tbody>
  </table>
</div>
    </div>
</div>
</div>



