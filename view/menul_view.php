<?php
if(isset($_SESSION["lgn_clnt_smt_process"])){
  $varKey_encrpt_for_clnt_prcss_smt = $_SESSION["var_ssn_ecrpt_procs_clnt_smt"];
  if($_SESSION["lgn_clnt_smt_process"]==$varKey_encrpt_for_clnt_prcss_smt){

?>
<div class="container-fluid">
<br>
    <div class="row" id="row-frame-principal">

    <div class="col-md-2" id="col-menu-vertical">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default" id="paneles-system">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-book"></span>&nbsp; Inscripción
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
       <ul class="list-group">
            <li class="list-group-item"><a href="Registros_Alumnos.html" title=""><span class="glyphicon glyphicon-edit">
            </span>&nbsp; Estudiantes</a></li>
            <li class="list-group-item"><a href="Registros_Docentes.html" title=""><span class="glyphicon glyphicon-edit">
            </span>&nbsp; Docentes</a></li>
            <li class="list-group-item"><a href="Registros_Materias.html" title=""><span class="glyphicon glyphicon-edit">
            </span>&nbsp; Materias</a></li>
        </ul>
    </div>
  </div>
<!--
  <div class="panel panel-default" id="paneles-system">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span class="glyphicon glyphicon-list-alt"></span>&nbsp; Impuestos
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
       <ul class="list-group">
          <li class="list-group-item"><a href="ConfigurarUsuario_impuesto.html" title="">Registrar Impuestos</a></li>

                <li class="list-group-item"><a href="ConfigurarUsuario_getTributos.html">Mis Impuestos</a></li>
                <li class="list-group-item"><a href="ConfigurarUsuario_getTributos2.html">Pagos</a></li>

        </ul>
    </div>

  </div>

<div class="panel panel-default" id="paneles-system">

  <div class="panel-heading" role="tab" id="headingGnrtcita">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseGnrtcita" aria-expanded="false" aria-controls="collapseGnrtcita">
          <span class="glyphicon glyphicon-list-alt"></span>&nbsp; Citas
        </a>
      </h4>
    </div>
    <div id="collapseGnrtcita" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGnrtcita">
       <ul class="list-group">
          <li class="list-group-item"><a href="ConfigurarUsuario_gnrt_cita.html" title="">Generar Cita</a></li>
        </ul>
    </div>

  </div>
-->
</div>
    </div>
<?php
}else{
  echo "<script type='text/javascript'>window.location='Usuarios_index.html';</script>";
}
}else{
  echo "<script type='text/javascript'>window.location='Usuarios_index.html';</script>";
}
?>