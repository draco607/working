<?php
if(isset($_SESSION["lgn_clnt_smt_process"])){
  $varKey_encrpt_for_clnt_prcss_smt = $_SESSION["var_ssn_ecrpt_procs_clnt_smt"];
  if($_SESSION["lgn_clnt_smt_process"]==$varKey_encrpt_for_clnt_prcss_smt){

?>
<script type="text/javascript">
      $(document).ready(function() {
          $('#example-multiple-selected').multiselect();
      });
      $(document).ready(function() {
          $('#example-multiple-selected2').multiselect();
      });
</script>


<script type="text/javascript">
window.onload=function(){
//Validacion Cedula Estudiante
var pattern = /\d/,
    caja = document.getElementById("doc_ced");

caja.addEventListener("keypress", function(e){
    this.value = this.value.toUpperCase();
    if (this.value.length === 0 && (!(/(E|V|P|e|v|p)/).test(String.fromCharCode(e.charCode))))
        e.preventDefault();
    if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode)) || this.value.length == 10))
        e.preventDefault();
    if (this.value.length === 1)
        this.value += "-";
}, false);

//Validacion Telefono 1
caja2 = document.getElementById("telf");

caja2.addEventListener("keypress", function(e){
        if(e.charCode != 0)
        {
            if (this.value.length === 0 && (!(/(1|2|3|4|5|6|7|8|9|0)/).test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length === 4)
                this.value += "-";
            if (this.value.length === 8)
                this.value += "-";
            if (this.value.length == 13)
            {
                alert("Maximo 13 Caracteres");
                e.preventDefault();
            }
        }
    
}, false);

//Validacion Telefono 2
caja2 = document.getElementById("telf2");

caja2.addEventListener("keypress", function(e){
        if(e.charCode != 0)
        {
            if (this.value.length === 0 && (!(/(1|2|3|4|5|6|7|8|9|0)/).test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length === 4)
                this.value += "-";
            if (this.value.length === 8)
                this.value += "-";
            if (this.value.length == 13)
            {
                alert("Maximo 13 Caracteres");
                e.preventDefault();
            }
        }
    
}, false);

//Validacion Fecha 1
caja2 = document.getElementById("fecha1");

caja2.addEventListener("keypress", function(e){
        if(e.charCode != 0)
        {
            if (this.value.length === 0 && (!(/(1|2|3|4|5|6|7|8|9|0)/).test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length === 2)
                this.value += "/";
            if (this.value.length === 5)
                this.value += "/";
            if (this.value.length == 10)
            {
                alert("Maximo 11 Caracteres");
                e.preventDefault();
            }
        }
    
}, false);

//Validacion Fecha 2
caja2 = document.getElementById("fecha2");

caja2.addEventListener("keypress", function(e){
        if(e.charCode != 0)
        {
            if (this.value.length === 0 && (!(/(1|2|3|4|5|6|7|8|9|0)/).test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length === 2)
                this.value += "/";
            if (this.value.length === 5)
                this.value += "/";
            if (this.value.length == 10)
            {
                alert("Maximo 11 Caracteres");
                e.preventDefault();
            }
        }
    
}, false);

//Validacion Fecha 3
caja2 = document.getElementById("fecha3");

caja2.addEventListener("keypress", function(e){
        if(e.charCode != 0)
        {
            if (this.value.length === 0 && (!(/(1|2|3|4|5|6|7|8|9|0)/).test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode))))
            {
                alert("Solo Numeros");
                e.preventDefault();
            }
            if (this.value.length === 2)
                this.value += "/";
            if (this.value.length === 5)
                this.value += "/";
            if (this.value.length == 10)
            {
                alert("Maximo 11 Caracteres");
                e.preventDefault();
            }
        }
    
}, false);

}//]]> 
</script>


<body>
<div class="container" id="container-form-reguser">
<div class="col-md-10">
 <div class="panel panel-default" id="paneles-system">
              <div class="panel-heading" id="title-panel-regform">
                    <h3 class="panel-title"><h3><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Registro de Docentes</h3>
<hr/></h3>
              </div>
             
     
       <div class="panel-body">
<form name="regalum" method="post" action="Registrosdocentes_crear.html" id="lala" class="form-horizontal">

    <div id="alumnos" class="row">
<div id="lo-que-vamos-a-copiar">
    <div class="col-xs-12 col-md-12">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
            <p></p>
        </div>
        
        <!-- <div class="stepwizard-step">
            <a href="#step-88" type="button" class="btn btn-default btn-circle" disabled="disabled">88</a>
            <p></p>
        </div> -->
    </div>
</div>

    <div class="row setup-content" id="step-1">
        
       
        
            <div class="col-md-12">
                <h3> Datos del Docentes</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Nombres</label>
                      <input maxlength="100" type="text" name="doc_name" required="required" onblur="revisar(this); revisarletras(this)"  class="form-control" placeholder="Ingresa Nombres" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Apellidos</label>
                      <input maxlength="100" type="text" name="doc_ape" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Apellidos" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Cedula</label>
                      <input maxlength="100" type="text" name="doc_ced" id="doc_ced" onblur="ChangeCase(this);" required="required" class="form-control" placeholder="V-555555 E-55555 P-555555" />
                    </div>
                </div>

                 <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Edad</label>
                      <input maxlength="2" type="text" name="doc_edad" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="solo números" />
                    </div>
                </div>
            <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Estado Civil</label>
                        <select class="form-control" name="doc_estci" required="required">
                          <option value="">Seleccione</option>
                          <option value="1">Soltero(a)</option>
                          <option value="2">Casado(a)</option>
                         <option value="3">Viudo(a)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fecha Nacimiento</label>
                      <input maxlength="100" type="text" name="doc_fnac" id="fecha1" onblur="validatedate(this);" required="required" class="form-control" placeholder="MM/DD/AA" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Lugar Nacimiento</label>
                      <input maxlength="100" type="text" name="doc_lnac" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" placeholder="Ingresa Lugar Nacimiento" />
                    </div>
                </div>
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>

    <div class="row setup-content" id="step-2">
        
            <div class="col-md-12">
                <h3> Contactos </h3>
               <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Tel&eacute;fono Habitaci&oacute;n    </label>
                      <input maxlength="100" type="text" name="doc_telfhab" id="telf" required="required" class="form-control" placeholder="Ingresa Telefono" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Tel&eacute;fono Celular</label>
                      <input maxlength="100" type="text" name="doc_telf" id="telf2" required="required" class="form-control" placeholder="Ingresa Telefono" />
                    </div>
                </div>


                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Correo</label>
                      <input maxlength="100" type="text" name="doc_correo" onblur="revisar(this); revisarvarchar(this)" required="required" class="form-control" placeholder="Ingresa Correo Electronico" />
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <label class="control-label">Direcci&oacute;n</label>
                      <textarea maxlength="100" name="doc_dirc" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" rows="3" placeholder="Ingresa Direccion"></textarea>
                    </div>
                </div>
         </div>
              
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
        </div>   
    </div>


    <div class="row setup-content" id="step-3">
        
             <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fecha de Ingreso al MPPE</label>
                      <input maxlength="100" type="text" name="doc_finmppe" id="fecha2" onblur="validatedate(this);" required="required" class="form-control" placeholder="MM/DD/AA" />
                    </div>
                </div>

                 <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fecha de Ingreso a la Instituci&oacute;n</label>
                      <input maxlength="100" type="text" name="doc_finginst" id="fecha3" onblur="validatedate(this);" required="required" class="form-control" placeholder="MM/DD/AA" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">T&iacute;tulo de Bachiller</label>
                      <input maxlength="100" type="text" name="doc_tbac" required="required" onkeypress="return sololetras(event)" class="form-control" placeholder="Ingresa Título Bachiller" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">T&iacute;tulo Universitario</label>
                      <input maxlength="100" type="text" name="doc_tuni" required="required" onkeypress="return sololetras(event)" class="form-control" placeholder="Ingresa Título Universitario" />
                    </div>
                </div>

                     <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">C&oacute;digo Cargo</label>
                      <input maxlength="100" type="text" name="doc_codc" onblur="revisar(this); revisarvarchar(this)" required="required" class="form-control" placeholder="Ingresa Codigo de Cargo" />
                    </div>
                </div>

               <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Total Horas</label>
                      <input maxlength="100" type="text" name="doc_ho" required="required" onblur="revisar(this); numeros(this)" class="form-control" placeholder="Ingresa Total de horas" />
                    </div>
                </div>
      
    
        <div class="form-group col-md-11">
          <button class="btn btn-success pull-right" type="submit">Guardar</button>
        </div>   
    </div>
</form>
</div>


  <!--FIN DE FORM DINAMICO!!-->

    </div>            
</div>

    </div>



 </form>
 <div class="panel-footer">
             <p>
                 <i class="fa fa-info-circle fa-lg" id="footer-panel-reguser"></i>&nbsp;Asegurese de completar todos los campos para que su registro se lleve a cabo éxitosamente.
             </p>
  </div>

 </div>

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