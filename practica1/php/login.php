<!DOCTYPE HTML>
<html>
   <head>
     <meta charset="utf-8">
     <title> Login diario Indep </title>
   </head>

   <body>
   
   <?php
      // Iniciamos sesión para que busque si hay guardada alguna caché.
      session_start();
      if(empty($_SESSION["usuario"])){
        
	if(empty($_POST["usuario"])){
           echo "<form method='post' action='login.php' name='login'>

   	           <label for='usuario'> Usuario </label>
                   <input type='text' name='usuario' id='usuario'>
                   <br />
                   <label for='contrasenia'> Contraseña </label>
                   <input type='password' name='contrasenia' id='contrasenia'>
                   <input type='hidden' name='paginaVuelta' value='' >
 
                   <input type='submit' value ='Ingresar'>  

                   </form> ";
        }
        else{
           include_once("../configuracion.php");
           try{
             $conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);
           }catch(PDOException $e){ echo "Fallo al conectar a la base de datos".$e->getMessage(); }
           $consulta="Select usuario from usuario where usuario='".$_POST["usuario"]." ' and "."contrasenia='".$_POST["contrasenia"]."'";
	   
           try{
              $res = $conexion->query($consulta);
           }catch(PDOException $e){echo "Fallo al realizar la búsqueda: ".$e->getMessage();}	

	   if( !empty($res)){
              
              
              foreach($res as $var){
                  
                  $_SESSION["usuario"] = $var["usuario"];
              }
           }

           if(!empty($_SESSION["usuario"])){

	      echo "Bienvenido ".$_SESSION["usuario"]." espere mientras es redirigido.";
	      echo "
                 <script type='text/javascript'>
		   window.location='../periodico/index.php';
                    
                 </script> ";
          }
	  else{
             echo "
                 <script type='text/javascript'>
		   window.location='../php/login.php';
                    
                 </script> ";
          
         }

       }

      } 
      else {
          echo "Bienvenido de nuevo ".$_SESSION["usuario"]."<br />"; 
	  echo "<form action='../periodico/index.php' id='regresar'>
                 <input type='submit' value='Regresar'>
               </form>";
                

      }

   ?>
   </body>


</html>
