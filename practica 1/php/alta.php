<!DOCTYPE HTML>
<html>
   <meta charset='utf-8'>

   <?php
	

    if(empty($_POST["usuario"])){

   echo "
   <head>
     
     <title> Alta de usuario diario Indep </title>
	
     <script type='text/javascript'>

        window.onload = function(){
            document.getElementById('nombre').focus();
        }     


        function validacion(){
           var nom=document.getElementById('nombre').value;
           var tel = document.getElementById('telefono').value;
       	   var ape= document.getElementById('apellidos').value;
	   var cor = document.getElementById('correo').value;
	   var contrasenia = document.getElementById('contrasenia').value;
	   var usuario = document.getElementById('usuario').value;
	   var web = document.getElementById('web').value;
	   //Expresiones regulares para comprobar que los valores introducidos son correctos
	   var expNom= /(^\w+|\s?)+$/;
	   var expApe = /^(([a-z]|[A-Z])+\s?)+$/;
           var comTel = /^\d{9}$/; //números de teléfono
           var expCorreo = /^[a-z](\w([._]w)?)*@([a-z]+\.){1,2}[a-z]{2,3}$/;// /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/; // 
	   var expUsuario = /^[a-z]\w{2,}$/;
	   var expContrasenia = /^([a-z]|[A-Z])\w{5,12}$/;
           var expWeb = /^[(http|https):\/\/]?[www.]?\w+[\.\w]*\.\w{2,3}$/;


           if(nom == null || nom.length == 0 ||nom.length>15 || !nom.match(expNom)){
	       document.getElementById('etNombre').style.visibility='visible';
               return false;
           } 
	   else if(ape == null || ape.length == 0 || ape.length>30 || !ape.match(expApe)){
	       document.getElementById('etApellidos').style.visibility='visible';
               return false;
           }
           else if(tel.length!=0 && (tel.length!=9  || !tel.match(comTel) )){ //En caso de que se indique un teléfono
	       document.getElementById('etTelefono').style.visibility='visible';
               return false;
	   } 
	   else if( cor.length==0 || cor.length>40 || !cor.match(expCorreo)){
	       document.getElementById('etCorreo').style.visibility='visible';
               return false;
	   } 
	   else if( web.length>40 || (web.length>0 && !web.match(expWeb) ) ){
	       document.getElementById('etWeb').style.visibility='visible';
               return false;
	   } 
	   else if(usuario==null || usuario.length==0 || usuario.length>15 || !usuario.match(expUsuario)){
	       document.getElementById('etUsuario').style.visibility='visible';
               return false;
	   }
	   else if(contrasenia==null || contrasenia.length==0 || contrasenia.length>12|| !contrasenia.match(expContrasenia)){
	       document.getElementById('etContrasenia').style.visibility='visible';
               return false;
	   }  

           return true;
        }

     </script>

   </head>
 

   <body>
     <form action='alta.php' method='post' name='alta' onsubmit='return validacion()'>
        <label for='nombre'> Nombre </label>
        <input type='text' name='nombre' id='nombre' value=''>
	<small style='visibility:hidden' id='etNombre'> Es obligatorio introducir un nombre </small>
        <br />

        <label for='apellidos'>Apellidos </label>
        <input type='text' name='apellidos' id='apellidos' value=''>
	<small style='visibility:hidden' id='etApellidos'> Es obligatorio introducir los apellidos </small>

	<br />

	<label for='telefono'>Número de teléfono </label>
        <input type='text' name='telefono' id='telefono' value=''>
	<small style='visibility:hidden' id='etTelefono'> Debe de tener 9 números </small>

	<br />

	<label for='correo'>Correo electrónico</label>
        <input type='text' name='correo' id='correo' value=''>
	<small style='visibility:hidden' id='etCorreo'> Es obligatorio introducir un correo</small>

	<br />

        <label for='web'>Web </label>
        <input type='text' name='web' id='web' value=''>
	<small style='visibility:hidden' id='etWeb'> Debe seguir las reglas de una dirección web </small>

	<br />

	<label for='usuario'>Nombre de usuario </label>
        <input type='text' name='usuario' id='usuario'  value=''>
	<small style='visibility:hidden' id='etUsuario'> Es obligatorio introducir el nombre </small>
	<small style='visibility:hidden' id='etRepetido'> El nombre de usuario elegido ya está en nuestra base de datos. Pruebe con otro nuevo. </small>

	<br />

	<label for='contrasenia'>Contraseña </label>
        <input type='password' name='contrasenia' id='contrasenia' value=''>
	<small style='visibility:hidden' id='etContrasenia'> Es obligatorio introducir una contraseña entre 6 y 12 caracteres con el primero una letra en minúscula </small>
       
	<br />


        <input type='submit' id='enviar' value='enviar'>


     </form>
   </body> ";
	}
	else{
		include_once("../configuracion.php");
		try{
		   $conexion = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA,array(PDO::ATTR_PERSISTENT=>true));
		}
		catch(PDOException $e){echo "Fallo en la conexión: ".$e->getMessage();}
		   //buscamos que el usuario no esté ya registrado.
                   
		   $busqueda="select * from usuario where usuario='".$_POST["usuario"]."';";
		try{
		   $user= $conexion->query($busqueda);
		   
		   
		   if(!empty($user)){
		      foreach( $user as $var){
			  $usuario=$var["usuario"];
		      }
			
		   }
		  
		}catch(PODException $e){ echo " Error al buscar el usuario en la BD:".$e->getMessage(); }
		
		//echo "usuario: ".$usuario;

		if(empty($usuario)){
		   $busqueda = "Select * from usuario where correo='".$_POST["correo"]."';";
		   $user= $conexion->query($busqueda);
		   if(!empty($user)){
		      foreach( $user as $var){
			 $usuario=$var["usuario"];
		      }
			
		   }
		   if(empty($usuario)){
		     //Podemos registrar este usuario porque no está elegido ni el nombre ni el correo electrónico
		  
		  //iniciamos el registro del nuevo usuario.
		     if(empty($_POST["telefono"])){
		        $tel='null';
		     }
		     else{
		        $tel=$_POST["telefono"];
		     }

		     if(empty($_POST["web"])){
		        $web='null';
		     }
		     else{
		        $web="'".$_POST["web"]."'";
		     }
		     $busqueda="Insert into usuario values('".$_POST["nombre"]."','".$_POST["apellidos"]."',".$tel.",'".$_POST["correo"]."',".$web.",'".$_POST["usuario"]."','".$_POST["contrasenia"]."')"; 
		     
		     if($conexion->query($busqueda)){
		        echo "Ya puede conectarse como <br />Usuario: ".$_POST["usuario"]."<br />Contraseña: ".$_POST["contrasenia"];
			echo " 
	 			<script type='text/javascript'>
			        setTimeout(function(){window.location='../periodico/index.php'}, 3000);
			
			        </script>";
		     }
		     else{
		        echo "Imposible crear el usuario";
		     }
		   }
		   else { echo "El correo elegido ya se está utilizando.";}
		
		}else{
		    echo"El nombre ya está elegido. Por favor, elija otro nick";
		}
	
		

	}

	?>
</html>

