<div class="col-md-10">
<div class="panel panel-default" id="paneles-system">
              <div class="panel-heading" id="title-panel-regform">
                    <h3 class="panel-title"><h3><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Edición de Materias</h3>
<hr/></h3>
              </div>
             
     
       <div class="panel-body">

	<form action="Registros_materia.html" method="POST" class="form-horizontal" role="form">

            <div class="form-group">
            	<label class="col-md-2 control-label">Codigo de materia</label>
            	<div class="col-md-4">
            		<input type="text" name="cod_mat" disabled class="form-control" value="<?php echo $datos['id_materia']; ?>">
            		<input type="hidden" name="cod_mat" class="form-control" value="<?php echo $datos['id_materia']; ?>">
            	</div>
            </div>
            
            <div class="form-group">
            	<label class="col-md-2 control-label">Nombre de materia</label>
            	<div class="col-md-4">
            		<input type="text" name="name_mat" class="form-control" value="<?php echo $datos['descrip']; ?>">
            	</div>
            </div>

	
			<div class="form-group">
				<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
	</form>
</div>
</div>
</div>