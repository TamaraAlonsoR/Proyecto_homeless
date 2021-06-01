<?php 

if ($_POST['email']=="" || $_POST['pass']==""){
    echo "Usuario o clave en blanco";
}else{
    
   if( $conexion = mysqli_connect('localhost','root', '','homeless')){
       mysqli_set_charset($conexion, 'utf8');
       $email=$_POST['email'];
       $clave=$_POST['pass'];
       $consulta= 'select codigo_empleado, doc_oficial, nombre, password,email from trabajadores where email="'.$email.'"';
       if ($resultado=mysqli_query($conexion, $consulta)){//solo puede haber una fila
            if(mysqli_num_rows($resultado)){ 
               $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
               $claveHasheada=$fila['password'];
               $clave=$_POST['pass'];
              

               if(password_verify($clave, $fila['password'])){
                   
                   session_start();
                   
                   $_SESSION['codigo_empleado']=$fila['codigo_empleado'];
                   $_SESSION['nombre']=$fila['nombre'];
                   $_SESSION['email']=$fila['email'];
                   $_SESSION['doc_oficial']=$fila['doc_oficial']; 
               }
                 
                if( $conexion = mysqli_connect('localhost','root', '','homeless')){
       mysqli_set_charset($conexion, 'utf8');
       $consulta= 'select codigo_centro from trabajan where doc_oficial="'.$_SESSION['doc_oficial'].'"';
       if ($resultado=mysqli_query($conexion, $consulta)){//solo puede haber una fila
            if(mysqli_num_rows($resultado)){ 
               $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                $codigo_centro=$fila['codigo_centro'];
            }}}
               
                if($codigo_centro<=25 and $codigo_centro>=1 ){
                    header('Location:empleado.php');
                }elseif($codigo_centro>=28 and $codigo_centro<=34 ){
                    header('Location:empleado_centrodia.php');
                }elseif($codigo_centro<=50 and $codigo_centro>=45 ){
                    header('Location:empleado_comedorsocial.php');
                } elseif($codigo_centro==0){
                    header('Location:administrador.php');
                    
                }else{
                    echo 'Contraseña incorrecta';
                }
            }else {
                   //cuantas filas tiene una consulta
                       echo "Usuario inexistente"; //si es cero no existe
           } 
           }
         }
     
       mysqli_close($conexion); 
   }
    
?>