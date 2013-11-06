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
           <li class="celda internacional"> <a href="internacional.html">Internacional </a> </li>
	   <li class="celda politica"> <a href="politica.html"> Política </a > </li>
	   <li class="celda cultura"> <a href="cultura.html"> Cultura </a> </li>
           <li class="celda deportes"> <a href="deportes.html"> Deporte </a> </li>
        </ul>
        
        <div > <h1 class="nombre"> Cultura </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/juan_gelman_instalado_sistema_20130429" alt="juan helman">
        <p class="imgfoot" >Gelman, en su casa en México DF. / PRADIP J. PHANSE </p>
         
         <h2 onmouseover="relacionadas()"> Juan Gelman: “Se ha instalado todo un sistema para recortarnos el espíritu” </h2>
         
         <p>A Juan Gelman (Buenos Aires, 1930) la poesía se la inoculó la música de unos versos que no entendía, los de Pushkin, que recitaba en ruso su hermano mayor. Con nueve años, compuso sus primeros poemas para seducir a Ana, una chica de su barrio, un amor imposible porque ella tenía 11. Fracasó en la conquista, pero siguió escribiendo y 15 años después se dio cuenta de que quería ser poeta. Su madre, emigrante ucrania, recibió el anuncio con la inquietud de quien desea la prosperidad para sus hijos. “Nunca vas a ganar dinero con eso”, le dijo. Pero a la vez sonrió porque, junto a la noticia, su hijo traía en la mano su primer libro impreso.</p>

         <p>La profecía de su madre se cumplió a medias. “Los derechos de autor no dan para vivir pero la dotación de algunos premios me ha ayudado”, cuenta el poeta argentino desde el apacible salón de su casa en la capital mexicana. Gelman ha ganado entre otros el Juan Rulfo, el Neruda, el Reina Sofía de Poesía Iberoamericana y el Cervantes. Escribe una columna semanal en el diario argentino Página 12. Lee, pasea, ve los noticieros y sigue en la distancia al Atlanta, el equipo de su barrio, gran rival del Chacarita, que aspira a subir a la Primera División, y que cuenta con su "estímulo permanente".</p>

         <p>La vida del poeta quedó marcada por la desaparición de su hijo y de su nuera embarazada durante la dictadura militar, por la búsqueda de su nieta robada al nacer, y por el rencuentro con ella 23 años después. Gelman ha dicho muchas veces que el dolor de perder a un hijo no acaba nunca. Pero no escribe desde el odio, “que nos hace daño”, sino desde la pérdida. Y esa pérdida está también en el génesis de su último libro, Hoy, que será publicado próximamente tras reposar en el horno unos meses.</p>

         <p>Gelman se muestra cálido con el fotógrafo y el periodista. Toma café, pero les ofrece un tequila aunque son las once de la mañana. Habla muy bajito, como si no diera importancia a lo que dice. Y apostilla con sorna algunos de sus comentarios. ¿Se puede escribir poesía sin tener sentido del humor? No lo sabe, pero todos los poetas que conoce, lo tienen.</p>



         
        
        
        </div> <!-- fin .noticia -->
   
        <div id="relacionadas" >
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
