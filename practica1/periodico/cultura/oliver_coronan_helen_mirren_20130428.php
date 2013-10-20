<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="screen and (min-width:800px)" href="../../styles/noticia.css">
    <link rel="stylesheet" media="screen and (max-width:800px)" href="../../styles/secciones-small.css">
    <title> Diario INDEP, información veraz. </title>

    

  </head>

  

  <body>
     <?php
          include_once("../../php/barraUsuario.php");
     ?>  
      

    
    <div class="leftad" >
       <div class="der">
         <img  src="../../publicidad/fairyizq.jpg" alt="fairy">
       </div> 
    </div>
    
    
    
    <div class="upad"> 
          <img src="../../publicidad/fairyup.jpg" alt="fairy"> 
    </div>
    
    <div class="rightad">
       <div class="izq">  <img src="../../publicidad/fairyizq.jpg" alt="fairy"> </div> 
    </div>

    

    <!-- A partir de aquí está contenido de la noticia. -->
    <div class="main cultura">
	<div id="logo">
          <img  src="../../logo/indep.jpg" alt="indep">
	</div>

        <div id="iniciarSesion">

	</div>

	<ul class="secciones">
           <li class="celda internacional"> <a href="../internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="../politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="../cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="../deportes.html"> Deporte </a> </li>
        </ul>
        
        <div > <h1 class="nombre"> Cultura </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/oliver_coronan_helen_mirren_20130428" alt="hombre abatido">
        <p class="imgfoot" >Helen Mirren, con su galardón en Londres. / Mike Marsland (WireImage) </p>
         
         <h2 onmouseover="relacionadas()"> Los Olivier coronan a Helen Mirren </h2>
         
         

         <p>La actriz Helen Mirren ha obtenido en la noche del domingo el premio Olivier, el más prestigioso del teatro británico, por su papel protagonista en la obra La Audiencia, donde reedita el personaje de Isabel II que hace siete años le reportó un Oscar. Pero la gran protagonista de la velada ha sido la producción The Curious Incident of the Dog in the Night-Time, que ha acumulado siete galardones, igualando el reto obtenido por el musical Matilda en la edición del año pasado.</p>

         <p>La obra que ha arrasado en los premios, y que partía favorita de todas las quinielas, tiene como protagonista a un adolescente que padece el síndrome de Asperger y es un genio de las matemáticas. Ese personaje, al tiempo desafiante y vulnerable, le ha valido al joven actor Luke Treadaway su primer Olivier, frente a la competencia de pesos pesados de la escena como James McAvoy o Rupert Everett. Dirigida por Marianne Elliot –también receptora del Olivier-, The Curious Incident of the Dog in the Night-Time es una adaptación realizada por Simon Stephens a partir de una exitosa novela de Mark Hadddon. La obra fue estrenada el año pasado en el National Theatre de Londres y, a raíz de su éxito, fue luego transferida al teatro Apollo del West End, donde permanece en cartel.</p>

         <p>“Quizá la reina merezca más este premio por la actuación más consistente y comprometida del siglo XX y probablemente del siglo XXI”, bromeó Helen Mirren al recoger el premio que le fue entregado por Daniel Radcliffe, el protagonista de la saga fílmica de Harry Potter. La actriz británica se declaró durante años una firme republicana, pero en los últimos años ha ido deslizándose hacia posiciones más cercanas a la monarquía. La Audiencia se centra en las sesiones semanales que la soberana ha venido celebrando con los sucesivos primeros ministros, encarnados todos ellos sobre el escenario por un reparto muy sólido y entre el que destaca Richard McCabe en el papel de Harold Wilson, compensado con otro Olivier.</p>

         <p>La votación del público sobre el mejor espectáculo teatral del año ha recaído en el musical Billy Elliot, y el premio a la mejor reposición se lo ha llevado la enésima puesta en escena de Largo viaje hacia la Noche, del Nobel Eugene O´Neill. Top Hat, que rememora la era dorada de Hollywood y a figuras legendarias de la danza como Fred Astaire, se ha alzado con el premio a la mejor nueva producción musical, mientras en el capítulo de reposiciones de musicales ha resultado vencedora Sweeney Todd, junto a sus dos principales protagonistas, Imelda Staunton y Michael Ball.</p>

         <p>Los premios Olivier, que en su presente edición han suscitado controversia por incorporar al jurado a empresarios y productores teatrales, han sido retransmitidos en diferidos por la televisión británica por primera vez después de diez años. Sus promotores esperan que ello contribuya a revitalizar la asistencia al teatro, aunque en el caso de La Audiencia y de su actriz protagonista no será necesario porque el cartel de no hay entradas fue colgado en el teatro Guielgud casi en el momento mismo de su estreno. Helen Mirren arrasa también sobre las tablas.</p>

         
        
        
        </div> <!-- fin .noticia -->
   
        <div id="relacionadas">
        <h4> Noticias Relacionadas </h4>
        </div> <!-- Fin de noticias relacionadas-->
        


        <div id="comentarios">

           <br/> <br/><br/>
           <h3> Comentarios </h3>


           <div class="comentario">
              
              <div class="usuario"> peppere </div>
              <div class="texto">
                Verguenza de política exterior española, meterse en casa ajena cuando la propia está 
                descoyuntada. 
              </div>
              <div class="fecha"> 1 de mayo de 2013 </div>
              
        </div> <!-- fin del comentario 1-->
        
        <br /> <br/>
        
        <div class="comentario">
              
              <div class="usuario"> merm </div>
              <div class="texto">
                A mí me parece que Margallo no tiene ni idea de diplomacia, después de meterse con 
                Chaves y el chavismo todo y más, ahora quiere ser intermediario. Desde luego más 
                torpe no se puede ser. A mí particularmente me parece que Chaves no lo ha hecho 
                bien, pero vamos ni locos aceptarían la propuesta de Margallo.  
              </div>
              <div class="fecha"> 1 de mayo de 2013 </div>
              
        </div> <!-- fin del comentario 2-->




        
        </div> <!-- Fin de comentarios-->
        
        <!-- Validar envío de comentario -->
        <form id="aniadirComentario" method="post" onsubmit="return validar('<?echo $_SESSION['usuario'] ;?>')">
          <textarea cols="85" rows="10" enabled name="nuevoComentario"> </textarea>
	  <input type="submit" value="Enviar" > 
	</form>            



   </div> <!-- fin de .main-->
  </body>
</html>
