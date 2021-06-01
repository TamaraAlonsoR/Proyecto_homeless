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

        <h1 class="text-center titulo" style="margin-top:5%">Aquí encontrarás información sobre tu contrato. Si tiene cualquier duda; póngase en contacto con el departamente de recursos humanos de su empresa.</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="margin-left:15%">
                <?php 
                if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		mysqli_set_charset($conexion,'utf8');
		$consulta = 'SELECT fecha_inicio, fecha_fin, salario, jornada FROM contratos WHERE email="'.$_SESSION['email'].'"';
                if ($resultado= mysqli_query($conexion, $consulta))
		{	//recorrer en un bucle todas las filas que salen del resultado de la consulta
			echo '<table >';
         
            $cabecera=mysqli_fetch_fields($resultado); //devuelve la cabecera en un array de objetos
            echo '<tr id="celdas">';
            foreach ($cabecera as $valor){
                echo '<th id="celdas">'.$valor->name.'</th>';
                
            }
            echo '</tr>';
           while ($fila = mysqli_fetch_row($resultado))
            {
                 echo '<tr>';
				foreach ($fila as $valor) {
					echo '<td id="td">'.$valor.'</td>'; //recorre los elementos de la fila
                  
				}
            
			}}echo '</table>';
		}
        

		mysqli_close($conexion); 
                    
		?>
		<br><br>
                <input type="button" id="convenio"  value="Ver convenio">
                <input type="button" id="vacaciones" value="Ver vacaciones">
            </div>
            <div class="col-2"></div>

        </div>
        <div class="row">
            <div class="col-2"></div>
            <!--CONVENIO-->
            <div class="col-8" id="oculto" style="margin-bottom:20%">
                <?php 
              if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		
		              $consulta = 'SELECT convenio FROM contratos WHERE email="'.$_SESSION['email'].'"';
                      $resultado= mysqli_query($conexion, $consulta);
		              $datos= $resultado -> fetch_assoc(); 
                  echo '<h4>Aquí puedes revisar el convenio de su contrato:</h4>';
                        $convenio=$datos['convenio'];
                  if($convenio=="Convenio 1"){
                      echo 'hola';
                      
                  }elseif ($convenio=="Convenio 2"){
                      echo 'holaa';
                      
                  }elseif($convenio=="Convenio 3"){
                      
          echo '  <iframe src="docs/convenio1.pdf" style="width:718px; height:700px;" frameborder="0"></iframe>';
                  }
                }
              
              ?>


            </div>
            <div class="col-2"></div>

        </div>
        <div class="row">
            <div class="col-2"></div>
            <!--VACACIONES-->
            <div class="col-8" id="oculto1">
                <?php 
              if ($conexion = mysqli_connect('localhost', 'root', '','homeless')){
		
		              $consulta = 'SELECT fecha_inicio, fecha_fin FROM contratos WHERE email="'.$_SESSION['email'].'"';
                      $resultado= mysqli_query($conexion, $consulta);
		              $datos= $resultado -> fetch_assoc(); 
                      
                  if($datos['fecha_fin']=="0000-00-00"){
                      $inicio=date_create($datos['fecha_inicio']);
                      $actual = date('Y-m-d');
                        $contador=date_diff($inicio, $actual);
                        $differenceFormat = '%a';
                        echo 'Has generado: '.($contador->format($differenceFormat)/30).' días de vacaciones';
                  }else{
                      $inicio=date_create($datos['fecha_inicio']);
                      $fin=date_create($datos['fecha_fin']);
                        $contador=date_diff($inicio, $fin);
                        $differenceFormat = '%a';
                        echo 'Has generado: '.($contador->format($differenceFormat)/30).' días de vacaciones';
                  }
                      
              }
                ?>
            </div>
            <div class="col-2"></div>
        </div>

    </div>
    <script type="text/javascript">
        $(function() {
            $("#oculto").hide();
        });
        $("#convenio").click(function() {
            $("#oculto").toggle();
        });
        
         $(function() {
            $("#oculto1").hide();
        });
        $("#vacaciones").click(function() {
            $("#oculto1").toggle();
        });

    </script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>