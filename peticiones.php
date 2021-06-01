<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
    <?php 

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$colaborar=$_POST['colaborar'];
$preferencias=$_POST['preferencias'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

if (isset($_POST['email'])) {
   if (comprobar_email($_POST['email'])){
       
       if ($conexion = mysqli_connect('localhost', 'root', '','homeless'))
	{
		mysqli_set_charset($conexion,'utf8');
		$consulta = "insert into peticiones values ('".$nombre."', '".$apellido1."', '".$apellido2."', '".$dni."', '".$colaborar."', '".$preferencias."', '".$email."', '".$telefono."')"; 
        if($resultado = mysqli_query( $conexion, $consulta)){
           echo '<p style="margin-top:20%;font-size:30px;color: #116272; text-align:center">Formulario enviado. Nos pondremos en contacto con usted lo antes posible. Muchas gracias</p>';
           
		
    
		
	}}
   }
      
   else{
      echo 'El email introducido NO es correcto!';}
}
function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

?>
</div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>