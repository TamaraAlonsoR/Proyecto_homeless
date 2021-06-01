<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
</head>

<body>
    <div class="container-fluid">
        <!-- barra navegacion-->
        <?php 
    session_start();
    if(isset($_SESSION['codigo_empleado'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <div style="margin-top:30%">
        <?php 
        $pass=$_POST['pass'];
        $pass1=$_POST['nuevaPass1'];
        $pass2=$_POST['nuevaPass2'];
        
        $_SESSION['codigo_empleado'];
            if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
            mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT password FROM trabajadores WHERE codigo_empleado='.$_SESSION['codigo_empleado'];
		$resultado= mysqli_query($conexion, $consulta);
		$datos= $resultado -> fetch_assoc(); //un array clave-valor
            $claveHas=$datos['password'];
             if(password_verify($pass, $claveHas)){
                 
                 if($pass1==$pass2){
                     $passNueva=password_hash($pass1, PASSWORD_DEFAULT);
                    //UPDATE
                     if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		                  mysqli_set_charset($conexion,'utf8');
                         $consulta1 = 'UPDATE trabajadores SET password="'.$passNueva.'"  WHERE codigo_empleado='.$_SESSION['codigo_empleado'];
                         
                         if($resultado1 = mysqli_query( $conexion, $consulta1)){
                         echo 'Has cambiado la contraseña';  
                        }     
                
                 }}else{
                     echo 'Has introducido contraseñas diferentes. Vuelve a intentarlo.';
                 }
             }else{
                 echo "Has introducido mal tu contraseña actual. Vuelve a intentarlo.";
             }
    
        
		mysqli_close($conexion);
	}
        
        ?>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>