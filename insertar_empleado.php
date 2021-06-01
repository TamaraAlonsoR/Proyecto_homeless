<?php 

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$nac=$_POST['nac'];
$sexo=$_POST['sexo'];
$puesto=$_POST['puesto'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$codigo_centro=$_POST['codigo'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$convenio=$_POST['convenio'];
$salario=$_POST['salario'];
$jornada=$_POST['jornada'];

if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
	 mysqli_set_charset($conexion,'utf8');
    $consulta = "INSERT INTO trabajadores (email, password,doc_oficial, nombre, apellido1, apellido2, sexo, fecha_nacimiento,puesto) VALUES ('".$email."','".$pass."','".$dni."','".$nombre."', '".$apellido1."', '".$apellido2."', '".$sexo."','".$nac."','".$puesto."')"; 
    
    $consulta1="INSERT INTO trabajan VALUES ('".$codigo_centro."','".$dni."')";
    
    $consulta2="INSERT INTO contratos VALUES ('".$dni."','".$email."','".$inicio."','".$fin."','".$convenio."','".$salario."','".$jornada."')";
    
    echo $consulta;
    echo $consulta1;
    echo $consulta2;
    
     if ($resultado= mysqli_query($conexion, $consulta) and $resultado1= mysqli_query($conexion, $consulta1) and $resultado2= mysqli_query($conexion, $consulta2)){
        
                    header('Location:administrador.php');
                }
}
   
?> 