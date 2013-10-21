<!DOCTYPE HTML>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/styles.css">
    <title> Diario INDEP, información veraz. </title>
    <script type="text/javascript" src="javascript/funciones.js"> </script>
    <?php
       include_once('configuracion.php');

        
       session_start();
       //añadir una noticia a últimas novedades
       if($_SESSION["usuario"] == "admin"){
          if(!empty($_POST["nombreAniadir"])){
             try{$conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);}catch(PDOException $e){ echo"No se pudo realizar la conexión: ".$e->getMessage();}
               $consulta = "Insert into nuevasNoticias set usuario='".$_POST["nombreAniadir"]."',texto='".$_POST["nuevaNoticia"]."';";
             try{
               $conexion->query($consulta);
             }catch(PDOException $e){ echo"No se pudo realizar la búsqueda: ".$e->getMessage();}

             $conexion=null;
             
          }
          
          if(!empty($_POST["pag"])){
              echo "Pagina pulsada: ".$_POST["pag"];
          }
          
         
       }
       //Barra de identificación como usuario-registro o 'log off'
       if(!$_SESSION["usuario"]){
         echo " 
         <script type='text/javascript'>
	    window.onload= function(){
	       //Texto
	       var bienvenida= document.createTextNode('Bienvenido a la web del Diario Indep, puede identificarse o crear una cuenta.');
	       //Enlace iniciar sesión
	       var link = document.createElement('a');
               link.setAttribute('href','php/login.php');
	       link.setAttribute('id','sesion');
               var text = document.createTextNode('Iniciar sesión');

	       //Enlace para registrarse 
	       var nuevo = document.createElement('a');
               nuevo.setAttribute('href','php/alta.php');
	       nuevo.setAttribute('id','nuevo');
               var textNuevo = document.createTextNode('Registrarse');
	
	       document.getElementById('iniciarSesion').appendChild(bienvenida);
               document.getElementById('iniciarSesion').appendChild(link);
               document.getElementById('sesion').appendChild(text);
	       document.getElementById('iniciarSesion').appendChild(nuevo);
               document.getElementById('nuevo').appendChild(textNuevo);	
                
               mostrar();
	    }
         </script> ";
       }
       else{
         echo "
          <script type='text/javascript'>
	    window.onload= function(){
            //Texto
	       var bienvenida= document.createTextNode('Bienvenido de nuevo ".$_SESSION["usuario"]."');
	       //Enlace iniciar sesión
	       var link = document.createElement('a');
               link.setAttribute('href','php/logout.php');
	       link.setAttribute('id','logout');
               var text = document.createTextNode('Cerrar sesión');
	       document.getElementById('iniciarSesion').appendChild(bienvenida);
               document.getElementById('iniciarSesion').appendChild(link);
               document.getElementById('logout').appendChild(text);

               mostrar();
            }
         
         </script>";
      }

      //mostrar las noticias de novedades.
      try{$conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);}catch(PDOException $e){ echo"No se pudo realizar la conexión: ".$e->getMessage();}
       if(!empty($_POST["pag"])){
         $p = ($_POST["pag"]-1)*10;
         $consulta = "Select * from nuevasNoticias order by ts desc limit ".$p.",10;";
       }
       else{
         $consulta = "Select * from nuevasNoticias order by ts desc limit 0,10;";
       }
       try{
          $res = $conexion->query($consulta);
          if(!empty($res)){

                
	       echo"<script type='text/javascript'>
                
                function mostrar(){

                var doc = document.getElementById('ventana');";
             foreach($res as $var){
             echo"
               
                var usuario= document.createElement('div');
                usuario.setAttribute('class','autor');
                var nomUsuario = document.createTextNode('".$var['usuario']."');
                
                var salto = document.createElement('br');

                var texto= document.createElement('div');
                texto.setAttribute('class','noticia');
                var nomTexto = document.createTextNode('".$var['texto']."');

                usuario.appendChild(nomUsuario);
                texto.appendChild(nomTexto);
                
                doc.appendChild(usuario);
                doc.appendChild(texto);
                doc.appendChild(salto);
                
             ";
             }
             echo " }

             </script>";

                 
       

          }//fin if-empty
                   

       }catch(PDOException $e){echo "Problema al realizar la búsqueda: ".$e->getMessage();}    

       

    ?>
  </head>


  <body>
    
      
    
    

    <div class="leftad" >
       <div class="der">
         <img  src="publicidad/fairyizq.jpg" alt="fairy">
       </div> 
    </div>
    
    
    
    <div class="upad"> 
          <img src="publicidad/fairyup.jpg" alt="fairy"> 
    </div>
    
    <div class="rightad">
       <div class="izq">  <img src="publicidad/fairyizq.jpg" alt="fairy"> </div> 
    </div>

    

    <!-- A partir de aquí está contenido de la portada. -->
    <div class="main">
	<div id="logo">
          <a href="index.php"><img  src="logo/indep.jpg" alt="indep"> </a>
	</div>

	<div id="iniciarSesion">

	</div>

        <ul class="secciones" id="secciones">
           <li class="celda internacional"> <a href="internacional.php">Internacional </a> </li>
	   <li class="celda politica"> <a href="politica.php"> Política </a > </li>
	   <li class="celda cultura"> <a href="cultura.php"> Cultura </a> </li>
           <li class="celda deportes"> <a href="deportes.php"> Deporte </a> </li>
        </ul>
	

        <div id="principales">

          <div class="notprin titular">
            <h2><a href="internacional/hombre_dispara_dos_policias_20130428.php">Un hombre dispara a dos policías ante la sede del Gobierno en Italia</a></h2>
            <p> El ataque ha ocurrido mientras el nuevo Ejecutivo juraba el cargo. El atacante ha declarado al 
            	fiscal que es desempleado y está desesperado. "Quería disparar a los políticos", ha dicho</p>
            <img class="noticia"src="images/hombre_dispara_dos_policias_20130428" alt="hombre_disparado" >
            <p class="imgfoot">
		ATENTADO EN ITALIA. Un carabiniere yace en el suelo tras ser disparado frente al Palacio 
		Chigi en Roma / GIAMPIERO SPOSITO (REUTERS)
            </p>
            <br />
            
          </div>

	  <div class="notprin">
	    <img class="noticia" src="images/miles_personas_contra_recortes_20130428" alt="contra_recortes" >
            <p class="imgfoot">
		Cabecera de la manifestación contra los recortes en Cataluña / A.Olivé (EFE)
            </p>
	    <h3> <a href="politica/miles_personas_contra_recortes_20130428.php"> Miles de personas se manifiestan en Barcelona contra los recortes</a> </h3>
            <p> La protesta ha reunido a miles de profesionales y usuarios de la sanidad, la educación y funcionarios</p>
            <br />
          </div>

	  <div class="notprin">
	    <img class="noticia" src="images/anatomia_de_decreto_limitado_20130428" alt="anatomia_decreto" >
            <p class="imgfoot">
		Carlos y Verónica, una pareja que está a punto de ser desahuciados. / G. Lejarcegi
            </p>
	    <h3> <a href="politica/anatomia_de_decreto_limitado_20130428.php"> Anatomía de un decreto limitado </a> </h3>
            <p> Menos de un 2% de los que solicitaron parar el desahucio con la normativa de noviembre de 2012 lo lograron </p>
            <br />
          </div>

	  <div class="notprin">
	    <img class="noticia" src="images/catar_diplomacia_del_balon_20130428" alt="catar_diplomacia" >
            <p class="imgfoot">
		Edificios de Doha (Catar). / Bruno Barbey
            </p>
	    <h3> <a href="internacional/catar_diplomacia_del_balon_20130428.php">Catar, la diplomacia del balón</a> </h3>
            <p> El diminuto país extiende su influencia a base de financiar proyectos por todo el mundo y aspira a controlar el planeta fútbol</p>
            <br />
          </div>

	  

	
        </div> <!--- fin principales --> 

	<!-- Parte central de la zona main-->
	<div id="secundarias">
	
	   <div class="notsec">
		<div>
		  <img class="centro" src="images/oliver_coronan_helen_mirren_20130428" alt="helen_mirren">
	  	  <h5><a href="cultura/oliver_coronan_helen_mirren_20130428.php" >Los Olivier coronan a Helen Mirrena</a></h5>
	  	</div>
		  <p>La actriz recibe el galardón más prestigioso del teatro británico</p>
		
	   </div>
	   <br /><br />
	  
	  <div class="notsec">
		  <img class="centro" src="images/juan_gelman_instalado_sistema_20130429" alt="recortar_espiritu">
	  	  <h5><a href="cultura/juan_gelman_instalado_sistema_20130429.php">Juan Gelman: “Se ha instalado todo un sistema para recortarnos el espíritu”</a></h5>
		  <p>Gelman alerta del “acostumbramiento” y ultima la publicación de su libro, ‘Hoy’</p>
	  </div>
	<br /><br />

	  <div class="notsec">
		 <img class="centro" src="images/pau_gasol_siempre_fiel_20130430" alt="pau_gasol">
	  	 <h5><a href="deportes/pau_gasol_siempre_fiel_20130430.php">Pau Gasol: “Siempre he sido un tipo leal”</a></h5> 
		 <p>El jugador expresa su deseo de permanecer en los Lakers y no confirma su presencia en el Europeo</p>
	  </div>
	<br /><br />
	   <div class="notsec">
		 <img class="centro" src="images/teoria_del_pobre_perpetuo_20130502" alt="mr_talese">
	  	 <h5><a href="cultura/teoria_del_pobre_perpetuo_20130502.php">La teoría del pobre perpetuo</a></h5>
		 <p>El antropólogo francés Marc Augé analiza en su nuevo ensayo las tensiones causadas por el fracaso de las utopías y la ausencia de alternativas políticas</p>
	  </div>
	  
	<br /><br />
    	
	    <div class="otras">
	      <img class="centroabajo" src="images/caperucita_doctora_en_manhattan_20130429" alt="caperucita">
	      <h4><a href="cultura/caperucita_doctora_en_manhattan_20130429">Caperucita, doctora en Manhattan</a></h4>
  	      <p>Carmen Martín Gaite, convertida en un clásico de la literatura española en universidades de EE UU por 'Caperucita en Manhattan'</p>
  	    </div>
  	    
         <br />
    
            <div class="otras">
	      <img class="centroabajo" src="images/estudiante_que_salvo_mundo_20130428" alt="estudiante_mundo">
	      <h4><a href="internacional/estudiante_que_salvo_mundo_20130428.php">El estudiante que salvó al mundo de la austeridad</a></h4>
  	      <p>Un alumno de 28 años desmontó el informe de dos economistas de Harvard</p>
  	    </div>
  	    
  	    
    </div> <!-- fin secundarias -->
    
    <div id="novedades">
    	<li><h2> Novedades </h2></li>
    	<div id="ventana">
         

        </div>

        <!--  Pasar por php la página de la sección novedades.  -->

        <form id='pagina' name='pagina' method='post' action='index.php'>
           <input type='hidden' name='pag' id='pag' value='4'>
          
        

        <?php
             
             // barra de selector de páginas.
             try{$conexion = new PDO(DB_DSN,DB_USUARIO,DB_CONTRASENIA);}catch(PDOException $e){ echo"No se pudo realizar la conexión: ".$e->getMessage();}
               $consulta = "Select count(*) from nuevasNoticias;";
             try{
               $filas = $conexion->query($consulta);
             }catch(PDOException $e){ echo"No se pudo realizar la búsqueda: ".$e->getMessage();}
          
            //numero de filas
	    foreach($filas as $var){
               $num= $var[0];
            }
            
            $div = $num/10;
            if($num%10 != 0) $div++; // si el resto es distinto de cero necesitamos una página más.
              
            
            

            echo " ";
             for($i;$i<=$div;$i++){
                echo "<a onclick='cambiarPagina(".$i.")' href='javascript::cambiarPagina(".$i.")' >" .$i. "</a>";
 
             }
	     
             
 
            if($_SESSION["usuario"]=='admin'){
                
                
                  // <script type='text/javascript' src='javascript/administracion.js'> </script>   
                    
                 

            }
   
         ?>
          </form>
    </div>
     
    


    

    <div id="publicidad">
    		<br />
                
    		<img id='publiDerecha'  src="publicidad/seat_leon.gif" alt="seat leon">
                <?php 
                      // Elimina el anuncio de debajo de Novedades.
                      if($_SESSION["usuario"]=='admin'){
                      echo"
                         <script type='text/javascript'>
                            var no= document.getElementById('publiDerecha');
                           document.getElementById('publicidad').removeChild(no);
                         </script>";

		      echo "
                      <script type='text/javascript' src='javascript/administracion.js'></script>
                      <div id='administracion'> <br>
                         <a id ='botonAniadir' onclick='aniadirFunc()' > Añadir </a>
                         <a id='botonEliminar' onclick='eliminarFunc();'> Eliminar </a>
                         <a id='botonModificar' onclick='modificarFunc();' > Modificar </a>
                         <form name='aniadir' action='' onsubmit=''> </form>
                         
                         <form method='post' id='adm' name='adm' action='index.php' >
                         <label id='et' for='nombre'> Nombre </label>
                         <input  type='text' name='nombreAniadir' id='nombre' onblur='mostrarTexto(this);' value=''>
                         <textarea name='nuevaNoticia' id='not' cols='40' rows='5' maxlength='150' > </textarea>
                         <input type='submit' value='enviar'>
                         </form>
                         
                      </div>
                     
                     ";


}




                 ?>
    
    </div>
		
      
    </div>
    
    
	  

      </div>
    <br/> <br/>  
    
    <footer>
    	<div> Calle Falsa 123 Granada, CP 18000 </div>
    	<div class="suscribete"> <a href="formulario.html"> ¡Suscríbete!</a> </div>
    	<div> Teléfono 958-999-999 </div>
    	<div class="comosehizo"> <a href="pdf/comoSeHizo.pdf" >¡cómo se hizo!</a> </div>
    	<div><a href="mailto:webmaster@indep.com"> Contacto </a></div>
    	<br/><br/>
    	
    	
    </footer>

  </body>

</html>
