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
      </div>
       <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>