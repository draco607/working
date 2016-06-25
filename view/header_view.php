<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SiSu System</title>
	<!-- Bootstrap Core CSS -->
    <link href="web/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/public/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="web/public/estilos.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="web/public/js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="web/public/css/bootstrap-multiselect.css" type="text/css">
    <link type="text/css" href="web/public/css/demo_table.css" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="web/public/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="web/public/js/jslistadopaises.js"></script>
    <link rel="stylesheet" href="web/public/iconos/css/font-awesome.css">
    <link rel="stylesheet" href="web/public/octicons/octicons.css">
    <script type="text/javascript" src="web/public/js/validaforms.js"></script>
</head>
<script>
function revisar(elemento) {
    if (elemento.value==""){
        //elemento.className='error';
    } else {
        //elemento.className='form-input';
    }
}
</script>
<body data-spy="scroll" data-target="#affix">
<img src="web/public/img/cintillo.png" alt="" class="img-responsive">
<?php
 if(isset($_SESSION["Login"])){
     require_once("view/navbaru_view.php");
     require_once("view/menul_view.php");
 }else{
     require_once("view/navbar_view.php");
     //require_once("view/menul_view.php");
 }
  
 ?>
