<?php 

class RegistrosModel extends EntidadBase{
    
public function __construct() {
    $table="";
    parent::__construct($table);
}

public function getEndId($sec){
        $conexion = $this->db();
        $sql = "select currval($sec)";
        $stmt = $conexion->prepare($sql);
        $results = $stmt->execute();
        $rows = $stmt->fetchAll();
        $error = $stmt->errorInfo();
        return $rows[0][0];
}
    
public function new_act($val1,$val2,$val3,$val4){
        
    $sql="INSERT INTO  actividades_ex (id_actividad, descrip, asociacion, nivel,identificacion_a)
     VALUES (nextval('id_actividad'::regclass),:dep,:aso_cb,:n_rend,:ident_a)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':dep',$val1);
        $query->bindParam(':aso_cb',$val2);
        $query->bindParam(':n_rend',$val3);
        $query->bindParam(':ident_a',$val4);
        
        $save=$query->execute();

        //print_r($query->errorInfo());
        
        $id = $this->getEndId("'id_actividad'::regclass");
        
        return $id;
}

public function new_antro($val1,$val2,$val3,$val4,$val5){
        
    $sql="INSERT INTO d_antropo (id_antropo, talla, peso, talla_camisa, talla_zapato, talla_pantalon)
     VALUES (nextval('id_antropo'::regclass),:talla0,:peso,:talla1,:talla2,:talla3)";
        
        $query=$this->db()->prepare($sql);
       
        $query->bindParam(':talla0',$val1);
        $query->bindParam(':peso',$val2);
        $query->bindParam(':talla1',$val3);
        $query->bindParam(':talla2',$val4);
        $query->bindParam(':talla3',$val5);
      
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_antropo'::regclass");
        
        return $id;
}

public function new_cam($val1,$val2){
        
    $sql="INSERT INTO canaimas (id_canaima, codigo, correo)
     VALUES (nextval('id_canaima'::regclass),:c_cod,:c_correo)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':c_cod',$val1); 
        $query->bindParam(':c_correo',$val2);
      
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_canaima'::regclass");
        
        return $id;
}



public function new_doc($val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11){
        
    $sql="INSERT INTO documentos (id_doc, notas, boleta_p, p_nac, ced_repre, ced_estu, foto_estu, 
            fotos_repre, boleta_terc, boleta_rev, sobres, colaboracion)
     VALUES (nextval('id_doc'::regclass),:doc1,:doc2,:doc3,:doc4,:doc5,:doc6, 
           :doc7,:doc8,:doc9,:doc10,:doc_cola)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':doc1',$val1);
        $query->bindParam(':doc2',$val2);
        $query->bindParam(':doc3',$val3);
        $query->bindParam(':doc4',$val4);
        $query->bindParam(':doc5',$val5);
        $query->bindParam(':doc6',$val6);
        $query->bindParam(':doc7',$val7);
        $query->bindParam(':doc8',$val8);
        $query->bindParam(':doc9',$val9);
        $query->bindParam(':doc10',$val10);
        $query->bindParam(':doc_cola',$val11);


        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_doc'::regclass");
        
        return $id;
}

public function new_repre($val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11){
    $sql="INSERT INTO representante (identificacion_r, nombres, apellidos, f_nac, lugar_nac, 
            estado_nac, pais_nac, profesion, telefono, direccion, sexo)
     VALUES (:ident_r,:re_name,:re_ape,:re_fnac,:re_lnac, 
           :re_enac,:re_pnac,:re_prof,:re_telf,:re_dirc,:re_sexo)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':ident_r',$val1);
        $query->bindParam(':re_name',$val2);
        $query->bindParam(':re_ape',$val3);
        $query->bindParam(':re_fnac',$val4);
        $query->bindParam(':re_lnac',$val5);
        $query->bindParam(':re_enac',$val6);
        $query->bindParam(':re_pnac',$val7);
        $query->bindParam(':re_prof',$val8);
        $query->bindParam(':re_telf',$val9);
        $query->bindParam(':re_dirc',$val10);
        $query->bindParam(':re_sexo',$val11);

        $save=$query->execute();
        
        //print_r($query->errorInfo());

        if($save)
        {
            return true;
        }
        else
        {
            return false;
        }
}

public function new_esco($val1,$val2,$val3){
        
    $sql = "INSERT INTO escolaridad (id_esco, plantel_proc, id_status, grado)
        VALUES(nextval('id_esco'::regclass),:ppro,:id_status,:grado)";
                        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':ppro',$val1);
        $query->bindParam(':id_status',$val2);
        $query->bindParam(':grado',$val3);
        
        $save = $query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_esco'::regclass");
        
        return $id;
}

public function new_estu($val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8,$val9,$val10,$val11,$val12,$val13,$val14){
        
    $sql="INSERT INTO estudiantes (identificacion_a, nombres, apellidos, f_nacimiento, lugar_nac, 
            estado_nac, pais_nac, direccion, id_becado, id_canaima, id_antropo, 
            id_esco, identificacion_r, sexo)
            VALUES (:ident_a,:es_name,:es_ape,:es_fnac,:es_lnac,:es_enac,:es_pnac,:es_dirc,:beca,:canm,:antro,:esco,:ident_r,:es_sexo)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':ident_a',$val1);
        $query->bindParam(':es_name',$val2);
        $query->bindParam(':es_ape',$val3);
        $query->bindParam(':es_fnac',$val4);
        $query->bindParam(':es_lnac',$val5);
        $query->bindParam(':es_enac',$val6);
        $query->bindParam(':es_pnac',$val7);
        $query->bindParam(':es_dirc',$val8);
        $query->bindParam(':beca',$val9);
        $query->bindParam(':canm',$val10);
        $query->bindParam(':antro',$val11);
        $query->bindParam(':esco',$val12);
        $query->bindParam(':ident_r',$val13);
        $query->bindParam(':es_sexo',$val14);
        

        $save=$query->execute();
        
        //print_r($query->errorInfo());

        if($save)
        {
            return true;
        }
        else
        {
            return false;
        }
}

public function new_ins($val1,$val2,$val3,$val4,$val5,$val6){
        
    $sql="INSERT INTO inscripcion (id_inscrip, inicio_periodo, fin_periodo, fecha, identificacion_a, 
            id_usuario, id_doc, identificacion_d)
     VALUES (nextval('id_inscrip'::regclass),:iperi,:fperi,NOW(),:ident_a,:id_usu,:id_doc,:ident_d)";
     
        $query=$this->db()->prepare($sql);
       
        $query->bindParam(':iperi',$val1);
        $query->bindParam(':fperi',$val2);
        $query->bindParam(':ident_a',$val3);
        $query->bindParam(':id_usu',$val4);
        $query->bindParam(':id_doc',$val5);
        $query->bindParam(':ident_d',$val6);
      
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        if($save)
        {
            return true;
        }
        else
        {
            return false;
        }
}
    
public function new_mate($val1,$val2){
        
    $sql="INSERT INTO materias (id_materia, descrip)
     VALUES (:code,:descrip)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':code',$val1);
        $query->bindParam(':descrip',$val2);
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


public function new_matep($val1,$val2){
        
    $sql="INSERT INTO materias_pen (id_mat_pen, identificacion_a, id_materia)
     VALUES (nextval('id_mat_pen'::regclass),:ident_a,:mate_p)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':ident_a',$val1);
        $query->bindParam(':mate_p',$val2);
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_mat_pen'::regclass");
        
        return $id;
}

public function new_beca($val1){
        
    $sql="INSERT INTO becas (id_becado, institucion)
     VALUES (nextval('id_becado'::regclass),:inst)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':inst',$val1);
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_becado'::regclass");
        
        return $id;
}

public function new_mater($val1,$val2){
        
    $sql="INSERT INTO materias_rep (id_mat_rep, identificacion_a, id_materia)
     VALUES (nextval('id_mat_rep'::regclass),:ident_a,:mate_p)";
        
        $query=$this->db()->prepare($sql);
        $query->bindParam(':ident_a',$val1);
        $query->bindParam(':mate_p',$val2);
        $save=$query->execute();
        
        //print_r($query->errorInfo());

        $id = $this->getEndId("'id_mat_rep'::regclass");
        
        return $id;
}
    
    
   public function new_doct(){
        
    $sql = "INSERT INTO docente (identificacion_d, nombres, apellidos, edo_civil, edad, f_nac, lugar_nac, direccion, telefono_1, telefono_2, correo, f_ingreso, t_bachiller, t_universitario, codigo_cargo, total_horas, f_actualiza, f_ingmppe )
    VALUES(:doc_ced,:doc_name,:doc_ape,:doc_estci,:doc_edad,:doc_fnac,:doc_lnac,:doc_dirc,:doc_telfhab,:doc_telf,:doc_correo,:doc_finginst,:doc_tbac,:doc_tuni,:doc_codc,:doc_ho,materia,:doc_finmppe)";
                        
        $query=$this->db()->prepare($sql);
        
                        $query->bindParam(':doc_ced',$val1);
                        $query->bindParam(':doc_name',$val2);
                        $query->bindParam(':doc_ape',$val3); 
                        $query->bindParam(':doc_estci',$val4);
                        $query->bindParam(':doc_edad',$val5);
                        $query->bindParam(':doc_fnac',$val6);
                        $query->bindParam(':doc_lnac',$val7);
                        $query->bindParam(':doc_dirc',$val8);
                        $query->bindParam(':doc_telfhab',$val9);
                        $query->bindParam(':doc_telf',$val10);
                        $query->bindParam(':doc_correo',$val11);
                        $query->bindParam(':doc_finginst',$val12);
                        $query->bindParam(':doc_tbac',$val13);
                        $query->bindParam(':doc_tuni',$val14);
                        $query->bindParam(':doc_codc',$val15);
                        $query->bindParam(':doc_ho',$val16);
                        $query->bindParam(':doc_finmppe',$val17);
                       

        $save=$query->execute();
        
        //print_r($query->errorInfo());

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