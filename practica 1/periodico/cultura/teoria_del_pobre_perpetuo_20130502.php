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

    

    <!-- A partir de aquí está contenido de la portada. -->
    <div class="main cultura">
	<div id="logo">
          <img  src="../../logo/indep.jpg" alt="indep">
	</div>

        <div id="iniciarSesion">

	</div>

	<ul class="secciones">
           <li class="celda internacional"> <a href="internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="deportes.html"> Deporte </a> </li>
        </ul>
        
        <div > <h1 class="nombre"> Cultura </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/teoria_del_pobre_perpetuo_20130502" alt="Margallo">
        <p class="imgfoot" >Marc Augé, antropólogo francés. / BERNARDO PÉREZ (EL PAÍS) </p>
         
         <h2 onmouseover="relacionadas()"> La teoría del pobre perpetuo </h2>
         
         <p>Marc Augé (Poitiers, 1935) lleva toda la vida observando humanos. Estuvieran en Togo o en el metro de París. Acaso sea esa curiosidad la que explica que el africanista se hiciera famoso por acuñar un concepto ultramoderno y superurbano, que pasaría desapercibido en boca del comisario de una feria de arte conceptual y que en la de Augé sonó a teoría para desbrozar el presente: los no-lugares, esos espacios anónimos que no son de nadie y son de todos como los aeropuertos, los supermercados o las autopistas.</p>

         <p>Pero dado que considera al etnólogo un “testigo del planeta” y al antropólogo “un especialista del presente”, no resulta extraño que Augé, con su ojo avizor, se vaya metiendo en todos los charcos, ya sean suyos o ajenos. El último es un ensayo titulado Futuro (Adriana Hidalgo editora). ¿No es una paradoja en un examinador del hoy? “La paradoja reside en otro aspecto: la generalización de los problemas. Un etnólogo es un especialista de lo local, que no significa lo mismo que hace tiempo. Ha habido un cambio de escala y todo tiene ahora una dimensión planetaria. Esa es la paradoja: el etnólogo estudia la realidad social en un contexto y, hoy en día, el contexto es siempre planetario. Incluso para una pequeña tribu amazónica”.</p>

	<p>Esa globalización, que va por partes, está al comienzo de un miedo que paraliza principalmente a las sociedades que antes vibraron con pujanza. Augé considera que hay temor a imaginar el futuro y una de las razones reside en lo que se ha perdido sin que nada ocupe el hueco.</p>

	<p>“En el XIX aparecieron las utopías, pero en el XX hemos visto que han fracasado, como el comunismo, y ha aparecido una utopía liberal cuyas dificultades estamos viviendo hoy día. Eso da miedo. Y también el hecho de que tenemos la idea de que lo que ocurre en una parte le concierne a todas. La economía y la tecnología son globales y la sociedad y la política, todavía no lo son. Esa tensión entre los aspectos tecnológicos y económicos con los sociopolíticos es una razón de incertidumbre y miedo”.</p>
 
        
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


       <form id="aniadirComentario" method="post" onsubmit="">
          <textarea cols="85" rows="10" enabled name="nuevoComentario"> </textarea>
	  <input type="submit" value="Enviar" > 
	</form> 
   
   </div> <!-- fin de .main-->
  </body>
</html>
