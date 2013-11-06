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
        <ul >
           <li class="celda"> <a>Internacional <a> </li>
	   <li class="celda"> <a> Política <a> </li>
 	   <li class="celda"> <a> Economía <a></li>
	   <li class="celda"> <a> Cultura <a> </li>
           <li class="celda"> <a> Deporte <a> </li>
        </ul>
        </div> 
        
        <div > <h1 class="nombre"> Internacional </h1> </div>
        
        <div class="noticia">
        <img class="poscentro" src="../../images/estudiante_que_salvo_mundo_20130428" alt="hombre abatido">
        <p class="imgfoot" >Los profesores de Harvard Kenneth Rogoff y Carmen Reinhart. / M. F. Calvert  </p>
         
         <h2 onmouseover="relacionadas()"> El estudiante que salvó al mundo de la austeridad</h2>
         
         <p> Cuando la deuda de un país supera el 90% del PIB, el crecimiento de la economía es inviable. El aserto, nacido de dos cerebros de Harvard y sobre el que se asientan las políticas de austeridad que están a punto de dinamitar los pilares del Estado de bienestar en medio mundo, ha resultado tan falaz como las armas de destrucción masiva que sirvieron para justificar la invasión de Irak.</p>

         <p>“Es exagerado hacer la comparación, pero acepto la analogía porque es cierto que se están adoptando políticas a partir de premisas que son falsas”. Quien habla es Thomas Herndon, el estudiante de 28 años que, en su camino para sacarse un doctorado en Economía en la Universidad de Massachusetts, ha desenmascarado la mentira macroeconómica más significativa de los últimos años, y sobre la que EE UU y Europa se han apoyado en su campaña por la austeridad fiscal y el recorte drástico del gasto.</p>

         <p>Herndon cuenta que se frotaba los ojos al cruzar los datos de su trabajo ordinario de carrera con los del hipercitado informe de los profesores de la prestigiosa Universidad de Harvard Carmen Reinhart y Kenneth Rogoff. Los errores eran básicos. De hecho, al principio pensó que el equivocado era él. No podía ser que dos reputadas eminencias hubieran podido pasar por alto cosas así.</p>

         <p>El estudio que está en el centro de la controversia global lo publicaron Reinhart y Rogoff en la American Economic Review en 2010. Ahí defienden cómo el crecimiento cae de golpe cuando la deuda pública de un país supera el 90% del PIB. Reinhart, nacida en La Habana (Cuba) hace 57 años, fue economista jefa durante tres años del difunto Bear Stearns, la primera víctima de la crisis financiera. Eso fue en los años 1980, antes de ocupar varios cargos en el Fondo Monetario Internacional (FMI), donde llegó a ser la número dos en el departamento de investigación antes de llegar a Harvard. Rogoff, de 60 años, fue su jefe en el FMI, donde tuvo un sonado encontronazo con Joseph Stiglitz a cuenta de la crítica que el premio Nobel hizo de esa institución en su libro El malestar en la globalización (2002).</p>
        
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
