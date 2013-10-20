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
    <div class="main internacional">
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
        
        <div > <h1 class="nombre"> Internacional </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/catar_diplomacia_del_balon_20130428" alt="hombre abatido">
        <p class="imgfoot" >Edificios de Doha (Catar). / Bruno Barbey  </p>
         
         <h2 onmouseover="relacionadas()"> Un hombre dispara a dos policías ante la sede del Gobierno en Italia </h2>
         
         <p>¿Cuál de estas dos historias es verdad?</p>

         <p>Catar va a lanzar un nuevo torneo de fútbol llamado Dream Football League que se disputará cada dos años, contará con la participación de los 24 clubes más importantes del mundo y ofrecerá un premio de 200 millones de euros, amenazando con aniquilar a la relativamente empobrecida Liga de Campeones.</p>

         <p>Catar patrocina un programa de excelencia deportiva global en el que han participado dos millones de jóvenes de tres continentes en cinco años y cuyo objetivo final es nacionalizar los mejores para que vistan los colores de su país en el Mundial que acogerá en el verano de 2022 bajo temperaturas que rozarán los 50 grados centígrados.</p>

         <p>La segunda es la verdadera. Pero sonaba tan plausible la primera, tomando en cuenta la espectacular ambición global de Catar y las cantidades siderales de dinero de las que dispone, que el venerable The Times de Londres la publicó como cierta con grandes titulares el mes pasado. The Times tuvo que rectificar y pedir disculpas a sus lectores. La sorpresa es que ese diario y otros tantos no hayan tenido que hacer eso mismo en más ocasiones desde que este diminuto país del golfo Pérsico tomó la decisión a principios de este siglo de convertirse en una especie de potencia imperial cuyo poderío monetario se extiende no solo a todas las ramas del deporte, sino a la adquisición de influencia política y de imponentes bienes materiales en todos los rincones de la tierra.</p>

         <p>Otra pregunta. ¿Qué tienen en común Lionel Messi, los Hermanos Musulmanes de Egipto, Tony Blair, Iberdrola, el almacén londinense Harrods, la marca de coches Porsche, David Beckham, el Banco de Santander, el Fútbol Club Barcelona, Nicolas Sarkozy, la resistencia islamista en Siria y el duque de Palma, Iñaki Urdangarín?</p>
         
         <p> ... </p>
        
        
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
