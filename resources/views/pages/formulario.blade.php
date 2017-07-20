<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autos de lujos</title>
</head>
<body>
	<form method="POST" action="{{url('vehicles/store')}}">
	 	{{ csrf_field() }}
		<input type="text" id="name_user" name="name_user" placeholder="Nombre" required="true"/>
		<input type="" id="" name="email" placeholder="Correo electronico" />
		<input type="" id="" name="cellphone" placeholder="Telefono celular" required="true" />
		<input type="" id="" name="brand" placeholder="Marca" required="true"/>
		<input type="" id="" name="year" placeholder="Modelo" required="true"/>		
		<input type="" id="" name="country_origin" placeholder="Pais de origen" />
		<input type="" id="" name="color" placeholder="Color" />
		<input type="" id="" name="placa" placeholder="Placa" />
		<input type="" id="" name="ref_car" placeholder="Serie del carro" />
		<select name="">
		   <option value=""></option> 
		   <option value=""></option> 
		   <option value=""></option>
		   <option value=""></option> 
		   <option value=""></option> 
		   <option value=""></option> 
		</select>
		<input type="" id="" name="value" placeholder="$ Costo" required="true" />
		<input type="" id="" name="negociable" placeholder="negociable" />
		<input type="" id="" name="actual_city" placeholder="Ciudad" required="true"/>
		<input type="" id="" name="actual_region" placeholder="Departamento" />
		<input type="" id="" name="neighborhood" placeholder="Barrio" />
		<input type="" id="" name="motor" placeholder="Motor" />
		<input type="" id="" name="transmision" placeholder="Transmision" />
		<input type="" id="" name="cylinder" placeholder="Cilindraje" />
		<input type="" id="" name="km" placeholder="Kilometraje" />
		<input type="" id="" name="combustible" placeholder="Combustible" />
		<input type="" id="" name="number_cylinder" placeholder="N° de Cilindros" />
		<input type="" id="" name="tapiz" placeholder="Tapizados" />
		<input type="" id="" name="brakes" placeholder="Frenos" />
		<input type="" id="" name="color_tapiz" placeholder="Color de Tapizados" />
		<input type="" id="" name="cool_air" placeholder="Aire acondicionado" />
		<input type="" id="" name="audio_system" placeholder="Sistema de Audio" />
		<input type="" id="" name="computer" placeholder="Computadora" />
		<input type="" id="" name="accesories" placeholder="accesorios" />
		<input type="" id="" name="which_accesories" placeholder="Cuales" />
		<input type="" id="" name="financiacion" placeholder="Financiamiento" />
		<input type="" id="" name="photo_main" />
		<input type="" id="" name="photo_2"  />
		<input type="" id="" name="photo_3"  />
		<input type="" id="" name="photo_4"  />
		<input type="" id="" name="photo_5"  />
		<input type="" id="" name="photo_6"  />
		<input type="" id="" name="photo_7"  />
		<input type="" id="" name="photo_8"  />
		<input type="" id="" name="alarm" placeholder="Alarma" />
		<input type="" id="" name="insurance_policy" placeholder="Poliza de seguro" />
		<input type="" id="" name="armored" placeholder="Blindado" />
		<input type="" id="" name="satelite" placeholder="Rastreo satelital" />
		<input type="submit" value="Submit">
	</form>
</body>
</html>