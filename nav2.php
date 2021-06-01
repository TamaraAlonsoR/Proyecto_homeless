<link rel="stylesheet" type="text/css" href="jardineria.css">
<?php 
          echo '<div class="header fixed-top">'; 
          echo '<div class="row ">';  
             echo '<div class="col-2 icon">';   
                 echo '<div class="container-fluid">';   
                  echo '<div class="navbar-brand" href="index.html">'; 
                      echo '<img src="imagenes/logo.png" alt="logo" width="150" height="90" class="d-inline-block align-top">';      

                     echo '</div>';   
                  echo '</div>';  
               echo '</div>'; 
               echo '<div class="col-10 navi">'; 
               echo '<nav class="navbar navbar-expand-lg navbar-dark navi ">';     
                 echo '<div class="container-fluid ">';       
                 echo '<a class="navbar-brand" href="index.php">INICIO </a>';           
                          echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                                echo '<span class="navbar-toggler-icon"></span>';
                            echo '</button>';
                           echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">'; 
                               echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">'; 
                                  echo '<li class="nav-item">';  
                                     echo ' <a class="nav-link active" aria-current="page" href="informacion.php">INFORMACIÓN </a>';   
                                   echo '</li>';  
                                   echo '<li class="nav-item dropdown">';  
                                      echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            RECURSOS
                                         </a>';   
                                       echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';  
                                         echo ' <a class="dropdown-item" href="albergues.php">ALBERGUES</a>';   
                                         echo '<a class="dropdown-item" href="centrosDia.php">CENTROS DE DÍA</a>';    
                                           echo '<a class="dropdown-item" href="comedores.php">COMEDORES SOCIALES</a>';
                                           echo '<a class="dropdown-item" href="dentistas.php">DENTISTAS SOCIALES</a>'; 
                                           echo '<a class="dropdown-item" href="roperos.php">ROPEROS</a>'; 
                                           echo '<a class="dropdown-item" href="baños.php">BAÑOS PÚBLICOS</a>'; 
                                       echo '</div>'; 
                                   echo '</li>'; 

                                   echo '<li class="nav-item">'; 
                                    echo '<a class="nav-link active" aria-current="page" href="voluntariado.php">¿CÓMO AYUDAR? </a>';    
                                    echo '</li>';
                                    echo '<li class="nav-item">';
                                      echo '<a class="nav-link active" aria-current="page" href="estadisticas.php">ESTADÍSTICAS </a>';  
                                  echo '</li>';  
                                   echo '<li class="nav-item">'; 
                                     echo '<a class="nav-link active" aria-current="page" href="noticias.php">NOTICIAS </a>';   
                                   echo '</li>'; 
                                  echo '<li class="nav-item">';  
                                     echo '<a class="nav-link active" aria-current="page" href="contacto.php">LOGIN</a>';   
                                    echo '</li>';
                               echo '</ul>'; 

                           echo '</div>'; 
                       echo '</div>'; 
                   echo '</nav>'; 
              echo '</div>';  

           echo '</div>'; 
      echo '</div>';  
?>
