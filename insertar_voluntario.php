<?php 
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$email=$_POST['email'];
$codigo_centro=$_POST['codigo'];
$tlfn=$_POST['tlfn'];



if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
$consulta = "INSERT INTO voluntarios (doc_oficial, codigo_centro, nombre, apellido1, apellido2,telf, email) VALUES ('".$dni."','".$codigo_centro."', '".$nombre."', '".$apellido1."', '".$apellido2."', '".$tlfn."','".$email."')"; 
$consulta1='DELETE FROM peticiones WHERE doc_oficial="'.$dni.'"';
        if($resultado = mysqli_query( $conexion, $consulta) and $resultado1= mysqli_query($conexion, $consulta1)){
            header('Location:administrador.php');
        }
}
?>