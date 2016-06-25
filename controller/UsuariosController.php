<?php
class UsuariosController extends ControladorBase{

    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        if(isset($_SESSION["Login"])){
            $this->viewU("index");
        }else{
            $this->viewU("login");
        }
    }
    
    public function cerrar(){
        session_destroy();
        echo("<script>location.href = './';</script>");
    }

    public function login()
    {
        $usuarios=new UsuariosModel();
        $usu=$usuarios->autentication($_POST["user"],$_POST["clave"]);
        if($usu = true)
        {
            $this->redirect();
        }
        else
        {
            $this->redirect();
        }
    }

}
?>
