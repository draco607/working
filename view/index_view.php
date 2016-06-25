<?php
if(isset($_SESSION["lgn_clnt_smt_process"])){
  $varKey_encrpt_for_clnt_prcss_smt = $_SESSION["var_ssn_ecrpt_procs_clnt_smt"];
  if($_SESSION["lgn_clnt_smt_process"]==$varKey_encrpt_for_clnt_prcss_smt){

?>
<script type="text/javascript">
function DefaultValor() {
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button" //chrome
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
<body DefaultValor() oncontextmenu="return false" onkeydown="return false">
<div class="col-md-9">
	<div class="panel panel-default" id="paneles-system">
	<div class="panel-heading" id="title-panel-regform">
                    <h3 class="panel-title"></h3><h3><i class="fa fa-user-plus"></i>&nbsp;Bienvenido.</h3>
              </div>
		<div class="panel-body">
			<?php
	  if($_SESSION["ATC"] == 1)
	  {
	  ?>	
	  <div class="panel-body">
			<p>Para poder continuar con las operaciones dentro del sistema es necesario que cargue sus datos faltantes.</p>
			<p>Cargar sus datos faltantes a través del Menú. Gestión de Datos - <a href="index.php?ctrl=Registros&act=actualizarDataDos">Mis Datos</a></p>
	  </div>
	  <?php
	  }
	  else
	  {
	  ?>
	  <div class="panel-body">
			<p>Tus datos estan completos puedes registrar impuestos.</p>
			<p>Verifica tus datos a través del Menú. Gestión de Datos - <a href="index.php?ctrl=Registros&act=actualizarDataDos">Mis Datos</a></p>
			<p>Sino te aparecen las demás opciones del sistema una vez cargado los datos del registro avanzado, recargue la página <a href="?ctrl=Usuarios&act=index">aquí</a></p>
	  		
	  </div>
	  <?php
	  }
	  ?>
		</div>
		<div class="panel-footer">
			Sistema Sumat
		</div>
	</div>
</div>
</body>
<?php
}else{
	echo "<script type='text/javascript'>window.location='index.php?ctrl=Usuarios&act=index';</script>";
}
}else{
  echo "<script type='text/javascript'>window.location='index.php?ctrl=Usuarios&act=index';</script>";
}
?>