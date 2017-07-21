<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autos de lujos</title>
</head>
<body>

	@if (Session::has('success-messages'))
		{{ Session::get('success-messages') }}
	@endif

	@if (Session::has('error-messages'))
		{{ Session::get('error-messages') }}
	@endif

	@if ($errors->has())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	<div>
		<form method="POST" action="{{url('vehicles/store')}}" enctype="multipart/form-data">
		 	{{ csrf_field() }}
			<input type="text" id="name_user" name="name_user" placeholder="Nombre" value="{{ old('name_user') }}" />
			<input type="" id="" name="email" placeholder="Correo electronico" value="{{ old('email') }}" />
			<input type="" id="" name="cellphone" placeholder="Telefono celular" value="{{ old('cellphone') }}" />
			<input type="" id="" name="brand" placeholder="Marca" value="{{ old('brand') }}"/>
			<input type="" id="" name="year" placeholder="Modelo" value="{{ old('year') }}"/>
			<input type="" id="" name="country_origin" placeholder="Pais de origen" value="{{ old('country_origin') }}" />
			<input type="" id="" name="color" placeholder="Color" value="{{ old('color') }}" />
			<input type="" id="" name="placa" placeholder="Placa" value="{{ old('placa') }}" />
			<input type="" id="" name="ref_car" placeholder="Serie del carro" value="{{ old('ref_car') }}" />
			<select name="type_car">
			   <option value="Sedan">Sedan</option> 
			   <option value="Deportivo">Deportivo</option> 
			   <option value="Camioneta">Camioneta</option>
			   <option value="Clasico">Clasico</option> 
			</select>
			<input type="" id="" name="value" placeholder="$ Costo" value="{{ old('value') }}" />
			<input type="" id="" name="negociable" placeholder="negociable" value="{{ old('negociable') }}" />
			<input type="" id="" name="actual_city" placeholder="Ciudad" value="{{ old('actual_city') }}"/>
			<input type="" id="" name="actual_region" placeholder="Departamento" value="{{ old('actual_region') }}"/>
			<input type="" id="" name="neighborhood" placeholder="Barrio" value="{{ old('neighborhood') }}" />
			<input type="" id="" name="motor" placeholder="Motor" value="{{ old('motor') }}" />
			<input type="" id="" name="transmision" placeholder="Transmision" value="{{ old('transmision') }}" />
			<input type="" id="" name="cylinder" placeholder="Cilindraje" value="{{ old('cylinder') }}" />
			<input type="" id="" name="km" placeholder="Kilometraje" value="{{ old('km') }}" />
			<input type="" id="" name="combustible" placeholder="Combustible" value="{{ old('combustible') }}" />
			<input type="" id="" name="number_cylinder" placeholder="N° de Cilindros" value="{{ old('number_cylinder') }}" />
			<input type="" id="" name="tapiz" placeholder="Tapizados" value="{{ old('tapiz') }}" />
			<input type="" id="" name="brakes" placeholder="Frenos" value="{{ old('brakes') }}" />
			<input type="" id="" name="color_tapiz" placeholder="Color de Tapizados" value="{{ old('color_tapiz') }}" />
			<input type="" id="" name="cool_air" placeholder="Aire acondicionado" value="{{ old('cool_air') }}" />
			<input type="" id="" name="audio_system" placeholder="Sistema de Audio" value="{{ old('audio_system') }}" />
			<input type="" id="" name="computer" placeholder="Computadora" value="{{ old('computer') }}" />
			<input type="" id="" name="accesories" placeholder="accesorios" value="{{ old('accesories') }}" />
			<input type="" id="" name="which_accesories" placeholder="Cuales" value="{{ old('which_accesories') }}" />
			<input type="" id="" name="financiacion" placeholder="Financiamiento" value="{{ old('financiacion') }}" />
			<input type="file" id="" name="photo_main" value="{{ old('photo_main') }}" />
			<input type="file" id="" name="photo_2" value="{{ old('photo_2') }}" />
			<input type="file" id="" name="photo_3" value="{{ old('photo_3') }}" />
			<input type="file" id="" name="photo_4" value="{{ old('photo_4') }}" />
			<input type="file" id="" name="photo_5" value="{{ old('photo_5') }}" />
			<input type="file" id="" name="photo_6" value="{{ old('photo_6') }}" />
			<input type="file" id="" name="photo_7" value="{{ old('photo_7') }}" />
			<input type="file" id="" name="photo_8" value="{{ old('photo_8') }}" />
			<input type="" id="" name="alarm" placeholder="Alarma" value="{{ old('alarm') }}" />
			<input type="" id="" name="insurance_policy" placeholder="Poliza de seguro" value="{{ old('insurance_policy') }}" />
			<input type="" id="" name="armored" placeholder="Blindado" value="{{ old('armored') }}" />
			<input type="" id="" name="satelite" placeholder="Rastreo satelital" value="{{ old('satelite') }}" />
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>