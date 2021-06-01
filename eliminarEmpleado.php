<?php 
$dni_borrar=$_POST['doc_oficial'];

if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
        
		$consulta ='DELETE FROM trabajadores WHERE doc_oficial="'.$dni_borrar.'"';
        $consulta1='DELETE FROM trabajan WHERE doc_oficial="'.$dni_borrar.'"';
        $consulta2='DELETE FROM contratos WHERE doc_oficial="'.$dni_borrar.'"';
       
    if ($resultado= mysqli_query($conexion, $consulta) and $resultado1= mysqli_query($conexion, $consulta1) and $resultado2= mysqli_query($conexion, $consulta2)){
        
		
                header('Location:administrador.php');
         
    }
               }
               
               

?>