<?php
class EntidadBase{
    private $table;
    private $db;
    private $conectar;

    public function __construct() {

        require_once 'Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
    }
    
    public function getConetar(){
        return $this->conectar;
    }
    
    public function db(){
        return $this->db;
    }
    
    public function getAll($val){
        $this->table = $val;
        $query = $this->db->prepare("SELECT * FROM $this->table");
        $query->execute();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function getById($id,$val,$val1){
        $this->table = $val;
        $query = $this->db->prepare("SELECT * FROM $this->table WHERE $val1=$id");
        $query->execute();

        if($row = $query->fetch(PDO::FETCH_ASSOC)) {
           $resultSet=$row;
        }
        
        return $resultSet;
    }
    
    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
        return $query;
    }
    
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }
    

    /*
     * Aqui podemos montarnos un monton de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
    
}
?>
