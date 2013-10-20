<!doctype html>
<html lang="es">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../styles/formulario.css">
	<title> Suscripción a Indep</title> 
	<h1> ¡Suscríbete! Tan solo por 30€ un mes.</h1>
	<h2>	Si lo hace antes del 2 de mayo 1 semana gratis. </h2>
<body>
	<section>
	<aside > 
		<h3> <br/><br/>Contacto: </h3>
		<a href="mailto:correspondencia@indep.com">  e-mail </a>
	</aside>	
	</section>


	

	<section>
		<table border="1">
		<caption> <h3><br/> Precios   </h3></caption>
		  <thead>
			<tr>
				<td> </td>
 				<td>  <h4> Precio</h4> </td>
				
			</tr>
		  </thead>
			
		  <tbody>
			<tr>
				<th>  Un año </th> 
				<td>   300 €</td>
				
			</tr>
			<tr>
				<th>  1 mes </th>
				<td>   30€ </td>
				
			</tr>

		  </tbody>

		</table>
		
		<h5> Gastos de envío incluídos</h5>


	</section>

	<section class="datos">
		<fieldset>
		  <legend> Datos personales </legend>
		  <form action="procesar.php" method="post">

			<label for="nombre"> Nombre </label>
			<input type="text" id="nombre" name="nombre" />

			<label for="apellidos"> Apellidos </label>
			<input type="text" id="apellidos" name="apellidos" />
		
			<br/>

			<label for="correo"> Correo </label>
			<input type="text" id="correo" name="correo" />

			<label for="telefono"> Teléfono </label>
			<input type="text" id="telefono" name="telefno" />
			
			<br/>

			<label for="fechaNac"> Fecha de nacimiento </label>
			<input type="text" placeholder="dd/mm/aaaa" id="fechaNac"/>
			
			<br/>
	
			

			<label > ¿Primera vez que se suscribe? </label>
			
			<br/> si <input type="radio" id="si" name="partic"  value="si" checked/> 
			      no <input type="radio" id="no" name="partic" value="no" />	

			<br/> 
			<label > Número de tarjeta de crédito </label>
			<input type="text" id="tarjeta" name="tarjeta" />
			
			<datalist id="conocimiento">
				<option value="Por internet">
				<option value="Por un conocido">
				<option value="Publicidad">

			</datalist>
			
			
			<br/> <br/>
			
			<input type="submit" id="enviar" value="enviar">	
			<input type="reset" id="resetear" value="resetear">

		  </form>
		</fieldset>
	</section>
	
</body>	


</html>
