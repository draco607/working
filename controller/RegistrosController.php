<?php
class RegistrosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    /*Metodos que llaman a las vistas*/
    
    //mostrando la vista
    public function Alumnos(){
       $obj=new EntidadBase();
       $data=$obj->getAll("materias");
       $dataEstatus=$obj->getAll("status");
       $this->view("reg_alum",array(
           "datos"=>$data,
           "dataE"=>$dataEstatus
           ));
    }
    //mostrando la vista de materias
    public function Materias(){
       $obj=new EntidadBase();
       $data=$obj->getAll("materias");
       $this->view("list_materias",array(
           "datos"=>$data
           ));
    }
    
     //mostrando la vista docentes
    public function Docentes(){
        $this->viewU("reg_doc");
    }
    
    public function GetMat(){
    $obj=new EntidadBase();
       $data=$obj->getById($_GET["id"],"materias","id_materia");
       $this->view("editMat",array(
           "datos"=>$data
           ));
           
    }
    
    
    
/******************************************************************************/
/*Metodos de registros*/
 
/*instanciamos el objeto que contiene los metodos de insert*/
    
    public function materia(){
        $obj = new RegistrosModel(); 
        $obj->new_mate($_POST["cod_mat"],$_POST["name_mat"]);
        
        if($obj=true){
            echo "se registro la materia";
        }else{
            echo "error";
        }
        
    }

    
//Registro Alumnos
public function regalum(){
    
    //Inscripcion
    $iniciop = $_POST["iperi"];
    $finp = $_POST["fperi"];
    //$fecha = NULL; //Value de Control no Necesario
    $ident_a = $_POST["es_ced"];
    $user = $_SESSION["ID"];
    $id_doc = NULL;
    $ident_d = "ANONIMO";
    
    //Datos AntropoMetricos
    $t1 = $_POST["talla0"];
    $p1 = $_POST["peso"];
    $t2 = $_POST["talla1"];
    $t3 = $_POST["talla2"];
    $t4 = $_POST["talla3"];
    
    //Escolaridad
    $ppro = $_POST["ppro"];
    $tesco = $_POST["esco"];
    $es_gra = $_POST["grado"];
    
    //Materias Repite
    $ident_a1 = $_POST["es_ced"];
    $mate_r = $_POST["mate_r"];
    
    //Materias Pendientes
    $ident_a2 = $_POST["es_ced"];
    $mate_p = $_POST["mate_p"];
    
    //Datos Estudiante
    $es_ced = $_POST["es_ced"];
    $es_name = $_POST["es_name"];
    $es_ape = $_POST["es_ape"];
    $es_fnc = $_POST["es_fnac"];
    $es_lnc = $_POST["es_lnac"];
    $es_enc = $_POST["es_enac"];
    $es_pnc = $_POST["es_pnac"];
    $es_dir = $_POST["es_dirc"];
    $es_beca = NULL;
    $es_cam = NULL;
    $es_antro = NULL;
    $es_esco = NULL;
    $es_repre = $_POST["re_ced"];
    $es_sexo = $_POST["es_sexo"];
    
    //Actividad Extra
    $act = $_POST["dep"];
    $aso = $_POST["aso_cb"];
    $niv_r =$_POST["n_rend"];
    $act_alum = $_POST["es_ced"];
    
    //Datos Representante
    $re_ced = $_POST["re_ced"];
    $re_name = $_POST["re_name"];
    $re_ape = $_POST["re_ape"];
    $re_fnc = $_POST["re_fnac"];
    $re_lnc = $_POST["re_lnac"];
    $re_enc = $_POST["re_enac"];
    $re_pnc = $_POST["re_pnac"];
    $re_prof = $_POST["re_prof"];
    $re_tlf = $_POST["re_telf"];
    $re_dir = $_POST["re_dirc"];
    $re_sex = $_POST["re_sexo"];
    
    //Datos Canaima
    $c_cod = $_POST["c_cod"];
    $c_correo = $_POST["c_correo"];
    
    //Documentos Entregados
    $doc1 = $_POST["doc1"];
    $doc2 = $_POST["doc2"];
    $doc3 = $_POST["doc3"];
    $doc4 = $_POST["doc4"];
    $doc5 = $_POST["doc5"];
    $doc6 = $_POST["doc6"];
    $doc7 = $_POST["doc7"];
    $doc8 = $_POST["doc8"];
    $doc9 = $_POST["doc9"];
    $doc10 = $_POST["doc10"];
    $cola = $_POST["doc_cola"];
    
    //Beca
    $beca_inst = "desconocida";
    
    //Declaracion
    $obj = new RegistrosModel(); 
    
    //Insert AntropoMetricos
    $es_antro = $obj->new_antro($t1,$p1,$t2,$t3,$t4);
    
    //Insert Escolaridad
    $es_esco = $obj->new_esco($ppro,$tesco,$es_gra);
    
    //Insert Representante
    $obj->new_repre($re_ced,$re_name,$re_ape,$re_fnc,$re_lnc,$re_enc,$re_pnc,$re_prof,$re_tlf,$re_dir,$re_sex);
    
    //Insert Beca
    $es_beca = $obj->new_beca($beca_inst);
    
    //Insert Canaima
    $es_cam = $obj->new_cam($c_cod,$c_correo);
    
    //Insert Estudiante
    $obj->new_estu($es_ced,$es_name,$es_ape,$es_fnc,$es_lnc,$es_enc,$es_pnc,$es_dir,$es_beca,$es_cam,$es_antro,$es_esco,$es_repre,$es_sexo);
    
    //Insert Materias Repitientes
    if($mate_r != NULL)
    {
        foreach($mate_r as $var => $val){
            $obj->new_mater($ident_a1,$val);
        }
    }
    
    //Insert Materias Pendientes
    if($mate_p != NULL)
    {
        foreach($mate_p as $var => $val){
            $obj->new_matep($ident_a2,$val);
        }
    }
    
    //Insert Actividades
    $obj->new_act($act,$aso,$niv_r,$act_alum);
    
    //Insert Documentos
    $id_doc = $obj->new_doc($doc1,$doc2,$doc3,$doc4,$doc5,$doc6,$doc7,$doc8,$doc9,$doc10,$cola);
    
    //Insert Inscripcion
    $exito = $obj->new_ins($iniciop,$finp,$ident_a,$user,$id_doc,$ident_d);
    
    //Condicional Registro Valido
    if($exito == true)
    {
        echo "<script type='text/javascript'>alert('Registrado con Exito.');window.location='Usuarios_index.html';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('No se ha podido registrar su solicitud.');window.location='Usuarios_index.html';</script>";
    }
    
}

//Registro Docentes
public function regdoc(){
    
    //Inscripcion
    $iniciop = $_POST["iperi"];
    $finp = $_POST["fperi"];
    //$fecha = NULL; //Value de Control no Necesario
    $ident_a = $_POST["es_ced"];
    $user = $_SESSION["ID"];
    $id_doc = NULL;
    $ident_d = "ANONIMO";
    
    //Datos AntropoMetricos
    $t1 = $_POST["talla0"];
    $p1 = $_POST["peso"];
    $t2 = $_POST["talla1"];
    $t3 = $_POST["talla2"];
    $t4 = $_POST["talla3"];
    
    //Escolaridad
    $ppro = $_POST["ppro"];
    $tesco = $_POST["esco"];
    $es_gra = $_POST["grado"];
    
    //Materias Repite
    $ident_a1 = $_POST["es_ced"];
    $mate_r = $_POST["mate_r"];
    
    //Materias Pendientes
    $ident_a2 = $_POST["es_ced"];
    $mate_p = $_POST["mate_p"];
    
    //Datos Estudiante
    $es_ced = $_POST["es_ced"];
    $es_name = $_POST["es_name"];
    $es_ape = $_POST["es_ape"];
    $es_fnc = $_POST["es_fnac"];
    $es_lnc = $_POST["es_lnac"];
    $es_enc = $_POST["es_enac"];
    $es_pnc = $_POST["es_pnac"];
    $es_dir = $_POST["es_dirc"];
    $es_beca = NULL;
    $es_cam = NULL;
    $es_antro = NULL;
    $es_esco = NULL;
    $es_repre = $_POST["re_ced"];
    $es_sexo = $_POST["es_sexo"];
    
    //Actividad Extra
    $act = $_POST["dep"];
    $aso = $_POST["aso_cb"];
    $niv_r =$_POST["n_rend"];
    $act_alum = $_POST["es_ced"];
    
    //Datos Representante
    $re_ced = $_POST["re_ced"];
    $re_name = $_POST["re_name"];
    $re_ape = $_POST["re_ape"];
    $re_fnc = $_POST["re_fnac"];
    $re_lnc = $_POST["re_lnac"];
    $re_enc = $_POST["re_enac"];
    $re_pnc = $_POST["re_pnac"];
    $re_prof = $_POST["re_prof"];
    $re_tlf = $_POST["re_telf"];
    $re_dir = $_POST["re_dirc"];
    $re_sex = $_POST["re_sexo"];
    
    //Datos Canaima
    $c_cod = $_POST["c_cod"];
    $c_correo = $_POST["c_correo"];
    
    //Documentos Entregados
    $doc1 = $_POST["doc1"];
    $doc2 = $_POST["doc2"];
    $doc3 = $_POST["doc3"];
    $doc4 = $_POST["doc4"];
    $doc5 = $_POST["doc5"];
    $doc6 = $_POST["doc6"];
    $doc7 = $_POST["doc7"];
    $doc8 = $_POST["doc8"];
    $doc9 = $_POST["doc9"];
    $doc10 = $_POST["doc10"];
    $cola = $_POST["doc_cola"];
    
    //Beca
    $beca_inst = "desconocida";
    
    //Declaracion
    $obj = new RegistrosModel(); 
    
    //Insert AntropoMetricos
    $es_antro = $obj->new_antro($t1,$p1,$t2,$t3,$t4);
    
    //Insert Escolaridad
    $es_esco = $obj->new_esco($ppro,$tesco,$es_gra);
    
    //Insert Representante
    $obj->new_repre($re_ced,$re_name,$re_ape,$re_fnc,$re_lnc,$re_enc,$re_pnc,$re_prof,$re_tlf,$re_dir,$re_sex);
    
    //Insert Beca
    $es_beca = $obj->new_beca($beca_inst);
    
    //Insert Canaima
    $es_cam = $obj->new_cam($c_cod,$c_correo);
    
    //Insert Estudiante
    $obj->new_estu($es_ced,$es_name,$es_ape,$es_fnc,$es_lnc,$es_enc,$es_pnc,$es_dir,$es_beca,$es_cam,$es_antro,$es_esco,$es_repre,$es_sexo);
    
    //Insert Materias Repitientes
    if($mate_r != NULL)
    {
        foreach($mate_r as $var => $val){
            $obj->new_mater($ident_a1,$val);
        }
    }
    
    //Insert Materias Pendientes
    if($mate_p != NULL)
    {
        foreach($mate_p as $var => $val){
            $obj->new_matep($ident_a2,$val);
        }
    }
    
    //Insert Actividades
    $obj->new_act($act,$aso,$niv_r,$act_alum);
    
    //Insert Documentos
    $id_doc = $obj->new_doc($doc1,$doc2,$doc3,$doc4,$doc5,$doc6,$doc7,$doc8,$doc9,$doc10,$cola);
    
    //Insert Inscripcion
    $exito = $obj->new_ins($iniciop,$finp,$ident_a,$user,$id_doc,$ident_d);
    
    //Condicional Registro Valido
    if($exito == true)
    {
        echo "<script type='text/javascript'>alert('Registrado con Exito.');window.location='Usuarios_index.html';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('No se ha podido registrar su solicitud.');window.location='Usuarios_index.html';</script>";
    }
    
}


    
}
?>