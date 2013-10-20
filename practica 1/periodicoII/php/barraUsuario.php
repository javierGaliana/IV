<?php
//Barra de identificación como usuario-registro o 'log off'
       session_start();
       if(!$_SESSION["usuario"]){
         echo " 
         <script type='text/javascript'>
	    function barra(){
	       //Texto
	       var bienvenida= document.createTextNode('Bienvenido a la web del Diario Indep, puede identificarse o crear una cuenta.');
	       //Enlace iniciar sesión
	       var link = document.createElement('a');
               link.setAttribute('href','../../php/login.php');
	       link.setAttribute('id','sesion');
               var text = document.createTextNode('Iniciar sesión');

	       //Enlace para registrarse 
	       var nuevo = document.createElement('a');
               nuevo.setAttribute('href','../../php/alta.php');
	       nuevo.setAttribute('id','nuevo');
               var textNuevo = document.createTextNode('Registrarse');
	
	       document.getElementById('iniciarSesion').appendChild(bienvenida);
               document.getElementById('iniciarSesion').appendChild(link);
               document.getElementById('sesion').appendChild(text);
	       document.getElementById('iniciarSesion').appendChild(nuevo);
               document.getElementById('nuevo').appendChild(textNuevo);	
                
              
	    }
         </script> ";
       }
       else{
         echo "
          <script type='text/javascript'>
	    function barra(){
            //Texto
	       var bienvenida= document.createTextNode('Bienvenido de nuevo ".$_SESSION["usuario"]."');
	       //Enlace iniciar sesión
	       var link = document.createElement('a');
               link.setAttribute('href','../../php/logout.php');
	       link.setAttribute('id','logout');
               var text = document.createTextNode('Cerrar sesión');
	       document.getElementById('iniciarSesion').appendChild(bienvenida);
               document.getElementById('iniciarSesion').appendChild(link);
               document.getElementById('logout').appendChild(text);

             
            }
         
         </script>";
      }
?>
<?php
           //insertar nuevo comentario
           if(!empty($_POST["nuevoComentario"])){
                  include_once('../../configuracion.php');
                  

       	 	  try{
         		$conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);
       		  }catch(PDOException $e){echo "Error al conectarse: ".$e->getMessage();}

                  $d=getDate();
                  $fecha = $d["year"]."-".$d["mon"]."-".$d["mday"];

       		  $consulta = "insert into comentarios values('".basename($_SERVER['PHP_SELF'])."','".$_SESSION['usuario']."','".$_POST["nuevoComentario"]."','".$fecha."');";
                  
                
                  try{
                     $conexion->query($consulta);
	          }catch(PDOException $e){echo "Problema al realizar la búsqueda: ".$e->getMessage();}

                  $conexion = null;

           }
     ?>

<?php
    
    echo "
    <script type='text/javascript'>";

    echo" function validar(nom){          
           return nom!='';
     }

     </script>";

?>
<?php
      
       include_once('../../configuracion.php');

       try{
         $conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);
       }catch(PDOException $e){echo "Error al conectarse: ".$e->getMessage();}

       $consulta = "Select * from comentarios where pagina='".basename($_SERVER['PHP_SELF'])."';";

       try{
          $res = $conexion->query($consulta);
         
          //Buscar y mostrar los comentarios de una página
          if(!empty($res)){
            echo "<script type='text/javascript'>
                function comentarios(){
                  var com = document.getElementById('comentarios')
		  var p = document.createElement('br');";
           
                  
            foreach($res as $var){
               echo "               

               var nuevoComentario = document.createElement('div');
               nuevoComentario.setAttribute('class','comentario');


               var usuario= document.createElement('div');
               usuario.setAttribute('class','usuario');
               var nombreUsuario = document.createTextNode('".$var["usuario"]."');


               var texto = document.createElement('div');
               texto.setAttribute('class','texto');
               var textoComentario = document.createTextNode('".$var["texto"]."');

 
               var fecha= document.createElement('div')  ;
               fecha.setAttribute('class','fecha');
               var textoFecha = document.createTextNode('".$var["fecha"]."');
       
               var salto = document.createElement('br');
             
               usuario.appendChild(nombreUsuario);
               texto.appendChild(textoComentario);
               fecha.appendChild(textoFecha);
               

               nuevoComentario.appendChild(usuario);
               nuevoComentario.appendChild(texto);
               nuevoComentario.appendChild(fecha);
               
     
           
               
               com.appendChild(nuevoComentario);
	       com.appendChild(salto);	
             
               
               ";
               

               
            }
                   
            echo "}


            window.onload = function(){                 
                 barra();
                 comentarios();
                 
            }
           </script>";

          } 

       }catch(PDOException $e){echo "Problema al realizar la búsqueda: ".$e->getMessage();}

       $conexion = null;

       


    ?>

<?php
     //ventana emergente con el contenido de las noticias relacionadas.
     echo" 
     <script type='text/javascript'>
     function relacionadas(){
        var myWindow = window.open('','','scrollbars=1,height=600,width=400');
	
        //var html = myWindow.document.createElement('html');
        myWindow.document.write(\"<html><div id="."'"."rel"."'"."></div></html>\"); 
        var relac = document.getElementById('relacionadas').cloneNode('true');
        var pos= myWindow.document.getElementById('rel');
        
        pos.appendChild(relac);

      }  
      
  
      
    </script>";

?>

