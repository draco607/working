<?php
class Usuario extends EntidadBase{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $password;
    private $horadeingreso;
    private $horadesalida;
    
    public function __construct() {
        $table="usuarios";
        parent::__construct($table);
    }
    
    public function getId() {
        return $this->id_usuario;
    }

    public function setId($id) {
        $this->id_usuario = $correo.$identificacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($nacionalidad)
    {
        $this->apellido = $apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getHoradeingreso()
    {
        return $this->horadeingreso;
    }

    public function setHoradeingreso($horadeingreso)
    {
        $this->horadeingreso = $horadeingreso;
    }

    public function getHoradesalida()
    {
        return $this->horadesalida;
    }

    public function setHoradesalida($horadesalida)
    {
        $this->horadesalida = $horadesalida;
    }

    public function save(){
        
    $sql="INSERT INTO usuario (id_usuario, nombre, apellido, correo, password, horadeingreso, 
            horadesalida)
     VALUES (:id,:name,:ape,:correo,:pass,:hora1,:hora2)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':id',$this->id);
        $query->bindParam(':name',$this->nombre);
        $query->bindParam(':ape',$this->apellido);
        $query->bindParam(':correo',$this->correo);
        $query->bindParam(':pass',$this->password);
        $query->bindParam(':hora1',$this->horadeingreso);
        $query->bindParam(':hora2',$this->horadesalida);

        $save=$query->execute();

        if($save)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

}
?>