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
    if(isset($_SESSION['email'])){
      include ('nav1.php');
        
    }else {
       include ('nav2.php');
        
    }
        ?>
        <div class="row" style="margin-top:30%">

            <?php 

if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
	
		          mysqli_set_charset($conexion,'utf8');
        $consulta0='select codigo_centro from trabajan where doc_oficial="'.$_SESSION['doc_oficial'].'"';
        if ($resultado= mysqli_query($conexion, $consulta0)){ 
                        while ($fila = mysqli_fetch_row($resultado))
                        {
                            foreach ($fila as $valor) {
                       
                                    $valor; 
                                    $codigo_centro=$valor;
                                    global $codigo_centro;
                            }
                        }}
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$dni=$_POST['dni'];
$nac=$_POST['nac'];
$sexo=$_POST['sexo'];
$nacionalidad=$_POST['nacionalidad'];
$empadronamiento=$_POST['empadronado'];
$ec=$_POST['ec'];
   
            
		$consulta = "INSERT INTO personas (doc_oficial, nombre, apellido1, apellido2, sexo, nacionalidad, empadronamiento, equipo_calle, fecha_nacimiento) VALUES ('".$dni."','".$nombre."', '".$apellido1."', '".$apellido2."', '".$sexo."', '".$nacionalidad."','".$empadronamiento."','".$ec."','".$nac."')"; 
        if($resultado = mysqli_query( $conexion, $consulta)){
             
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		          mysqli_set_charset($conexion,'utf8');
                  $consulta2="INSERT INTO acuden VALUES ('".$dni."','".$codigo_centro."')";
                if ($resultado= mysqli_query($conexion, $consulta2)){ 
                    header('Location:empleado.php');
                }
        }
        }else{
            echo 'usuario no insertado';
        }mysqli_close($conexion);
        }
   
        ?>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
