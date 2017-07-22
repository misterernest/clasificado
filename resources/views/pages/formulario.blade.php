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
			   <option value="Sedan" {{ old('type_car') == 'Sedan' ? "selected='true'" : "" }}>Sedan</option> 
			   <option value="Deportivo" {{ old('type_car') == 'Deportivo' ? "selected='true'" : "" }}>Deportivo</option> 
			   <option value="Camioneta" {{ old('type_car') == 'Camioneta' ? "selected='true'" : "" }}>Camioneta</option>
			   <option value="Clásico" {{ old('type_car') == 'Clásico' ? "selected='true'" : "" }}>Clásico</option> 
			</select>
			<select name="opcion">
			   <option value="Comprar" {{ old('opcion') == 'Comprar' ? "selected='true'" : ""}}>Comprar</option> 
			   <option value="Alquilar" {{ old('opcion') == 'Alquilar' ? "selected='true'" :"" }}>Alquilar</option>
			   <option value="Vender" {{ old('opcion') == 'Vender' ? "selected='true'" : ""}}>Vender</option>
			   <option value="Permutar" {{ old('opcion') == 'Permutar' ? "selected='true'" :"" }}>Permutar</option> 
			</select>
			<input type="" id="" name="value" placeholder="$ Costo" value="{{ old('value') }}" />
			<input type="" id="" name="negociable" placeholder="negociable" value="{{ old('negociable') }}" />
			<input type="" id="" name="actual_city" placeholder="Ciudad" value="{{ old('actual_city') }}"/>
			<input type="" id="" name="actual_region" placeholder="Departamento" value="{{ old('actual_region') }}"/>
			<input type="" id="" name="neighborhood" placeholder="Barrio" value="{{ old('neighborhood') }}" />
			<input type="" id="" name="motor" placeholder="Motor" value="{{ old('motor') }}" />
			<select name="transmision">
			   <option value="Automática" {{ old('transmission') == 'Automática' ? "selected='true'" : "" }}>Automática</option>
			   <option value="Manual" {{ old('transmission') == 'Manual' ? "selected='true'" : "" }}>Manual</option>
			   <option value="Mixta" {{ old('transmission') == 'Mixta' ? "selected='true'" : "" }}>Mixta</option>
			   <option value="Secuencial" {{ old('transmission') == 'Secuencial' ? "selected='true'" : "" }}>Secuencial</option>
			   <option value="Steptronic" {{ old('transmission') == 'Steptronic' ? "selected='true'" : "" }}>Steptronic</option>
			   <option value="Tiptronic" {{ old('transmission') == 'Tiptronic' ? "selected='true'" : "" }}>Tiptronic</option>
			</select>
			<input type="" id="" name="cylinder" placeholder="Cilindraje" value="{{ old('cylinder') }}" />
			<input type="" id="" name="km" placeholder="Kilometraje" value="{{ old('km') }}" />
			<select name="combustible">
			   <option value="Diesel" {{ old('combustible') == 'Diesel' ? "selected='true'" : ""}}>Diesel</option>
			   <option value="Electrico" {{ old('combustible') == 'Electrico' ? "selected='true'" : ""}}>Electrico</option>
			   <option value="Gas" {{ old('combustible') == 'Gas' ? "selected='true'" : ""}}>Gas</option>
			   <option value="Gasolina" {{ old('combustible') == 'Gasolina' ? "selected='true'" : ""}}>Gasolina</option>
			   <option value="Hibrido" {{ old('combustible') == 'Hibrido' ? "selected='true'" : ""}}>Hibrido</option>
			</select>
			<input type="" id="" name="number_cylinder" placeholder="N° de Cilindros" value="{{ old('number_cylinder') }}" />
			<input type="" id="" name="tapiz" placeholder="Tapizados" value="{{ old('tapiz') }}" />
			<select name="brakes">
			   <option value="ABS" {{ old('brakes') == 'ABS' ? "selected='true'" : ""}}>ABS</option>
			   <option value="Disco" {{ old('brakes') == 'Disco' ? "selected='true'" : ""}}>Disco</option>
			</select>
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