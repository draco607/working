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
    caja = document.getElementById("es_ced");

caja.addEventListener("keypress", function(e){
    this.value = this.value.toUpperCase();
    if (this.value.length === 0 && (!(/(E|V|P|e|v|p)/).test(String.fromCharCode(e.charCode))))
        e.preventDefault();
    if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode)) || this.value.length == 10))
        e.preventDefault();
    if (this.value.length === 1)
        this.value += "-";
}, false);

//Validacion Cedula Representante
var pattern = /\d/,
    caja = document.getElementById("re_ced");

caja.addEventListener("keypress", function(e){
    this.value = this.value.toUpperCase();
    if (this.value.length === 0 && (!(/(E|V|P|e|v|p)/).test(String.fromCharCode(e.charCode))))
        e.preventDefault();
    if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode)) || this.value.length == 10))
        e.preventDefault();
    if (this.value.length === 1)
        this.value += "-";
}, false);

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
}//]]> 
</script>

<body>
<div class="container" id="container-form-reguser">
<div class="col-md-10">
 <div class="panel panel-default" id="paneles-system">
              <div class="panel-heading" id="title-panel-regform">
                    <h3 class="panel-title"><h3><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Registro de Estudiantes</h3>
<hr/></h3>
              </div>
             
     
       <div class="panel-body">
<form name="regalum" method="post" action="Registros_regalum.html" id="lala" class="form-horizontal">

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
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
            <p></p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
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
                <h3> Periodo Escolar</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Inicio Periodo</label>
                      <input maxlength="4" type="text" name="iperi" required="required" onblur="revisar(this); revisarano(this)" class="form-control" placeholder="Ingresa Inicio Periodo" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fin Periodo</label>
                      <input maxlength="4" type="text" name="fperi" required="required" onblur="revisar(this); revisarano(this)"class="form-control" placeholder="Ingresa Fin Periodo" />
                    </div>
                </div>
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-2">
        
            <div class="col-md-12">
                <h3> Registro Antropométrico</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Talla</label>
                      <input maxlength="100" type="text" name="talla0" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="Ingresa Talla" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Peso</label>
                      <input maxlength="100" type="text" name="peso" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="Ingresa Peso" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Talla Camisa</label>
                      <input maxlength="100" type="text" name="talla1" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="Ingresa Talla Camisa" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Talla Zapato</label>
                      <input maxlength="100" type="text" name="talla2" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="Ingresa Talla Zapato" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Talla Pantalon</label>
                      <input maxlength="100" type="text" name="talla3" onkeypress="return NumCheck(event, this)" required="required" class="form-control" placeholder="Ingresa Talla Pantalon" />
                    </div>
                </div>
                
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-3">
        
            <div class="col-md-12">
                <h3> Escolaridad</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                        <label class="control-label">Tipo</label>
                        <select class="form-control" name="esco" required="required">
                          <option value="">Seleccione</option>
                            <?php 
                                for($a=0;$a<count($dataE);$a++){
                                    ?>
                                        <option value="<?php echo $dataE[$a]["id_status"]; ?>"><?php echo $dataE[$a]["descrip"]; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                        <label class="control-label">Grado</label>
                        <select class="form-control" name="grado" required="required">
                          <option value="">Seleccione</option>
                          <option value="1">1<sup>er</sup> Año</option>
                          <option value="2">2<sup>do</sup> Año</option>
                          <option value="3">3<sup>er</sup> Año</option>
                          <option value="4">4<sup>to</sup> Año</option>
                          <option value="5">5<sup>to</sup> Año</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Plantel de Procedencia</label>
                      <input maxlength="100" type="text" name="ppro" required="required" onblur="revisar(this); revisarvarchar(this)" class="form-control" placeholder="Ingresa Plantel de Procedencia" />
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="col-md-12">
                        <label class="control-label">Materias Repite</label>
                        <div>
                        <select class="form-control" name="mate_r[]" id="example-multiple-selected" multiple="multiple" >
                            <?php 
                                for($i=0;$i<count($datos);$i++){
                                    ?>
                                        <option value="<?php echo $datos[$i]["id_materia"]; ?>"><?php echo $datos[$i]["descrip"]; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div class="col-md-12">
                        <label class="control-label">Materias Pendientes</label>
                        <div>
                        <select class="form-control" name="mate_p[]" id="example-multiple-selected2" multiple="multiple">
                            <?php 
                                for($i=0;$i<count($datos);$i++){
                                    ?>
                                        <option value="<?php echo $datos[$i]["id_materia"]; ?>"><?php echo $datos[$i]["descrip"]; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                </div>
                
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-4">
        
            <div class="col-md-12">
                <h3> Datos del Alumno</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Nombres</label>
                      <input maxlength="100" type="text" name="es_name" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Nombres" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Apellidos</label>
                      <input maxlength="100" type="text" name="es_ape" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Apellidos" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Sexo</label>
                        <select class="form-control" name="es_sexo" required="required">
                          <option value="">Seleccione</option>
                          <option value="1">Masculino</option>
                          <option value="2">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Cedula</label>
                      <input maxlength="100" type="text" name="es_ced" id="es_ced" onblur="ChangeCase(this);" required="required" class="form-control" placeholder="V-555555 E-55555 P-555555" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fecha Nacimiento</label>
                      <input maxlength="100" type="text" name="es_fnac" required="required" onblur="validatedate(this);" class="form-control" placeholder="MM/DD/YEAR" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Lugar Nacimiento</label>
                      <input maxlength="100" type="text" name="es_lnac" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Lugar Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Estado Nacimiento</label>
                      <input maxlength="100" type="text" name="es_enac" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Estado Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Pais Nacimiento</label>
                      <input maxlength="100" type="text" name="es_pnac" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Pais Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <label class="control-label">Direccion</label>
                      <textarea maxlength="100" required="required" onblur="revisar(this); revisarvarchar(this)" name="es_dirc" class="form-control" rows="3" placeholder="Ingresa Direccion"></textarea>
                    </div>
                </div>
                
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-5">
        
            <div class="col-md-12">
                <h3> Actividad Extra-Curricular</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Deporte</label>
                      <input maxlength="100" type="text" name="dep" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" placeholder="Ingresa Deporte que Realiza" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Asociacion o Club</label>
                      <input maxlength="100" type="text" name="aso_cb" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" placeholder="Ingresa Asociacion o Club" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Nivel de Rendimiento</label>
                        <select class="form-control" name="n_rend" required="required">
                          <option value="">Seleccione</option>
                          <option value="1">Municipal</option>
                          <option value="2">Amateur</option>
                          <option value="3">Federado</option>
                          <option value="4">Alto</option>
                          <option value="5">Profesional</option>
                        </select>
                    </div>
                </div>

            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-6">
        
            <div class="col-md-12">
                <h3> Datos del Representante</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Nombres</label>
                      <input maxlength="100" type="text" name="re_name" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" placeholder="Ingresa Nombres" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Apellidos</label>
                      <input maxlength="100" type="text" name="re_ape" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Apellidos" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Sexo</label>
                        <select class="form-control" name="re_sexo" required="required">
                          <option value="">Seleccione</option>
                          <option value="1">Masculino</option>
                          <option value="2">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Cedula</label>
                      <input maxlength="100" type="text" name="re_ced" id="re_ced" onblur="ChangeCase(this);" required="required" class="form-control" placeholder="Ingresa Cedula" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Fecha Nacimiento</label>
                      <input maxlength="100" type="text" name="re_fnac" onblur="validatedate(this);" required="required" class="form-control" placeholder="Ingresa Fecha Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Lugar Nacimiento</label>
                      <input maxlength="100" type="text" name="re_lnac" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" placeholder="Ingresa Lugar Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Estado Nacimiento</label>
                      <input maxlength="100" type="text" name="re_enac" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Estado Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Pais Nacimiento</label>
                      <input maxlength="100" type="text" name="re_pnac" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Pais Nacimiento" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Profesion</label>
                      <input maxlength="100" type="text" name="re_prof" onblur="revisar(this); revisarletras(this)" required="required" class="form-control" placeholder="Ingresa Ocupacion o Profesion" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Telefono</label>
                      <input maxlength="100" type="text" name="re_telf" id="telf" required="required" class="form-control" placeholder="Ingresa Telefono" />
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <label class="control-label">Direccion</label>
                      <textarea maxlength="100" name="re_dirc" required="required" onblur="revisar(this); revisarletras(this)" class="form-control" rows="3" placeholder="Ingresa Direccion"></textarea>
                    </div>
                </div>
                
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-7">
        
            <div class="col-md-12">
                <h3> Registro Canaima</h3>
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Codigo</label>
                      <input maxlength="100" type="text" name="c_cod" onblur="revisar(this); revisarvarchar(this)" required="required" class="form-control" placeholder="Ingresa Codigo Canaima" />
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Correo</label>
                      <input maxlength="100" type="text" name="c_correo" onblur="revisar(this); revisarvarchar(this)" required="required" class="form-control" placeholder="Ingresa Correo Electronico" />
                    </div>
                </div>
            </div>
        <div class="form-group col-md-11">
          <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
        </div>   
    </div>
    <div class="row setup-content" id="step-8">
        
            <div class="col-md-12">
                <h3> Documentos Consignados</h3>
                
                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="doc1" value="1"><b>CERTIFICACIÓN DE NOTAS</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc2" value="1"><b>BOLETA DE PROMOCIÓN DE 6° GRADO</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc3" value="1"><b>PARTIDA DE NACIMIENTO</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc4" value="1"><b>CÉDULA DEL REPRESENTANTE</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc5" value="1"><b>CÉDULA DE ESTUDIANTE</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc6" value="1"><b>2 FOTOS DEL ESTUDIANTE</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc7" value="1"><b>2 FOTOS DEL REPRESENTANTE</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc8" value="1"><b>BOLETÍN DEL 3° LAPSO</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc9" value="1"><b>BOLETÍN DE REVISIÓN</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                    <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" name="doc10" value="1"><b>2 SOBRES TAMAÑO OFICIO</b>
                        </label>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="col-md-12">
                      <label class="control-label">Colaboracion</label>
                      <input maxlength="100" type="text" name="doc_cola" onblur="revisar(this); revisarvarchar(this)" required="required" class="form-control" placeholder="Ingresa Colaboracion" />
                    </div>
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