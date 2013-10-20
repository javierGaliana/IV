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
    <div class="main">
	<div id="logo">
          <img  src="../../logo/indep.jpg" alt="indep">
	</div>

        <div id="iniciarSesion">

	</div>

	<div class="secciones">
        <ul class="secciones">
           <li class="celda internacional"> <a href="../internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="../politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="../cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="../deportes.html"> Deporte </a> </li>
        </ul>
        <div>
        
        <div > <h1 class="nombre"> Política </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/anatomia_de_decreto_limitado_20130428" alt="Margallo">
        <p class="imgfoot" > Carlos y Verónica, una pareja que está a punto de ser desahuciados. / G. Lejarcegi  </p>
         
         <h2 onmouseover="relacionadas()"> Anatomía de un decreto limitado </h2>
         
         <p>El decreto de alivio a los deudores hipotecarios puesto en marcha por el Gobierno en noviembre de 2012 ha tenido un impacto muy limitado y ha resultado ineficaz. Esta es la principal conclusión a la que llega una investigación pionera del instituto Metroscopia encabezada por la exjuez Manuela Carmena, y que contó con la colaboración de EL PAÍS. Menos de un 2% de los que solicitaron que se suspendiera su desahucio acogiéndose al decreto lo lograron.</p>
         
         <p> Los estrictos requisitos para optar a paralizar el lanzamiento, los plazos establecidos, totalmente desconectados de la realidad de los procesos hipotecarios, y los complicados papeleos exigidos son algunas de las claves que ayudan a explicar el escaso impacto del decreto, señala el informe. </p>
         
         <p> “El estudio muestra que el decreto resulta inútil, que es papel mojado”, señala Violeta Assiego, una de las investigadoras de Metroscopia. “Además, también desmonta la proposición de ley que hay en curso en el Parlamento”. </p>
         
         <p> El Senado ya ha recibido el texto enviado por el Congreso, que recoge, con variaciones, los mismos requisitos que el decreto de noviembre, para poder paralizar un desahucio cuando la situación económica del deudor es grave (más allá de la existencia de cláusulas abusivas en el contrato). </p>
         
         <p> Las disfunciones del Real Decreto 27/2012 quedan patentes en una investigación realizada a partir del minucioso análisis de 92 expedientes del juzgado hipotecario n.º 32 de Madrid, realizada entre el 25 de marzo y el 12 de abril. Un equipo de tres investigadores analizaron los expedientes, seleccionados de entre las 244 peticiones de suspensión de lanzamiento de un total de 3.446 ejecuciones hipotecarias. </p>
         
         <p> Los investigadores se encontraron con que tan solo un 7,08% de todos los expedientes, correspondientes a los años 2010 y 2011, solicitaron la suspensión del lanzamiento acogiéndose al decreto. De todos estos, tan solo un 16,39% fueron aceptados por el juez. La cifra que viene a reflejar la eficacia del decreto queda por tanto reducida a un 1,16% (eso sí, hay que matizar que el número total de expedientes incluye casos de locales y garajes que podrían hacer subir ligeramente este dato al entorno del 2%). </p>
         
         <p> José María Fernández Seijo, juez de lo Mercantil del juzgado número 3 de Barcelona, atribuye fiabilidad a las cifras del informe. En Barcelona, señala, la cifra de las suspensiones paralizadas con el decreto rondaría más bien el 5%. Jaime Anta, titular del Juzgado de Primera Instancia número 2 de Santander, también estima que los datos son razonables. Asegura que en Santander, tan solo una persona se pudo acoger al decreto de alivio a los deudores hipotecarios. </p>
         
         
        
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

        <form id="aniadirComentario" method="post" onsubmit="return validar('<?echo $_SESSION['usuario'] ;?>')">
          <textarea cols="85" rows="10" enabled name="nuevoComentario"> </textarea>
	  <input type="submit" value="Enviar" > 
	</form>
   
   </div> <!-- fin de .main-->
  </body>
</html>
