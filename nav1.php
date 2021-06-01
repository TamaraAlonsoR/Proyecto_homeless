<link rel="stylesheet" type="text/css" href="jardineria.css">
<?php 
          echo '<div class="header fixed-top">'; 
          echo '<div class="row ">';  
             echo '<div class="col-2 icon">';   
                 echo '<div class="container-fluid">';   
    
                        echo '<img src="imagenes/logo.png" alt="logo" width="150" height="90" class="d-inline-block align-top">'; 
           
                  echo '</div>';  
               echo '</div>'; 
               echo '<div class="col-10 navi">'; 
                    echo '<div class="container-fluid ">'; 
               echo '<nav class="navbar navbar-expand-lg navbar-dark navi ">';     
                            
 echo ' <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                               echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">'; 
                                echo '<li class="nav-item">';  
                                     echo ' <a class="nav-link active" aria-current="page" href="cont_login.php">INICIO </a>';   
                                   echo '</li>';
                                  echo '<li class="nav-item">';  
                                     echo ' <a class="nav-link active" aria-current="page" href="datosContrato.php">CONTRATO </a>';   
                                   echo '</li>';  
                                   
                                   echo '<li class="nav-item">'; 
                                    echo '<a class="nav-link active" aria-current="page" href="cambiarPass.php">CAMBIAR CONTRASEÑA</a>';    
                                    echo '</li>';
                                    
                                  echo '<li class="nav-item">';  
                                     echo '<a class="nav-link active" aria-current="page" href="logout.php">CERRAR SESIÓN</a>';   
                                    echo '</li>';
                               echo '</ul>'; 

                           echo '</div>'; 
                      
                   echo '</nav>'; 
              echo '</div>';  
 echo '</div>'; 
           echo '</div>'; 
      echo '</div>';  
?>
