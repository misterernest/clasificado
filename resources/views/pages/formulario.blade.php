<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="css/tucan-gallery4.css" />
    <link rel="stylesheet" type="text/css" href="css/style-ant.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/formulario.css" >
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/prefixfree.min.js" type="text/javascript"></script>
    <script src="js/tucan-gallery4.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<title>Autos de lujos</title>
</head>
<body>
    <section>
        <article>

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
			<div class="container-fluid">
				<div class="row">
					<div class="  col-md-6">
						<div class="row row-form form-group">
							<div class="col-xs-12"><label>Datos personales*</label></div>
							<div class="col-sm-4"><input class="form-control" type="text" id="name_user" name="name_user" placeholder="Nombre" value="{{ old('name_user') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="text" id="email" name="email" placeholder="Correo electronico" value="{{ old('email') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="text" id="cellpone" name="cellphone" placeholder="Telefono celular" value="{{ old('cellphone') }}" /></div>
						</div>
					</div>
				</div>	
				
				<div class="row">
					<div class=" col-md-6 divisor-line">
						<div class="row row-form">
							<div class="col-md-12"><label>Datos Generales del Vehiculo</label></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="brand" placeholder="Marca" value="{{ old('brand') }}"/></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="year" placeholder="Modelo" value="{{ old('year') }}"/></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="country_origin" placeholder="Pais de origen" value="{{ old('country_origin') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="color" placeholder="Color" value="{{ old('color') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="placa" placeholder="Placa" value="{{ old('placa') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="ref_car" placeholder="Serie del carro" value="{{ old('ref_car') }}" /></div>
							<div class="col-sm-4"><select  class="form-control" name="type_car">
							   <option value="Sedan" {{ old('type_car') == 'Sedan' ? "selected='true'" : "" }}>Sedan</option> 
							   <option value="Deportivo" {{ old('type_car') == 'Deportivo' ? "selected='true'" : "" }}>Deportivo</option> 
							   <option value="Camioneta" {{ old('type_car') == 'Camioneta' ? "selected='true'" : "" }}>Camioneta</option>
							   <option value="Clásico" {{ old('type_car') == 'Clásico' ? "selected='true'" : "" }}>Clásico</option> 
							</select></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="value" placeholder="$ Costo" value="{{ old('value') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="negociable" placeholder="negociable" value="{{ old('negociable') }}" /></div>
							<div class="col-sm-4"><select  class="form-control" name="opcion">
							   <option value="Comprar" {{ old('opcion') == 'Comprar' ? "selected='true'" : ""}}>Comprar</option> 
							   <option value="Alquilar" {{ old('opcion') == 'Alquilar' ? "selected='true'" :"" }}>Alquilar</option>
							   <option value="Vender" {{ old('opcion') == 'Vender' ? "selected='true'" : ""}}>Vender</option>
							   <option value="Permutar" {{ old('opcion') == 'Permutar' ? "selected='true'" :"" }}>Permutar</option> 
							</select></div>
							
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="row row-form">
							<div class="col-xs-12"><label>Ingresa fotos del vehículo*</label></div>
							<div class="col-xs-12 col-md-12">
								<span class="btn btn-default btn-file photo_main glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_main" name="photo_main" value="{{ old('photo_main') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_2" name="photo_2" value="{{ old('photo_2') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_3" name="photo_3" value="{{ old('photo_3') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_4" name="photo_4" value="{{ old('photo_4') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_5" name="photo_5" value="{{ old('photo_5') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_6" name="photo_6" value="{{ old('photo_6') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_7" name="photo_7" value="{{ old('photo_7') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_8" name="photo_8" value="{{ old('photo_8') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_9" name="photo_9" value="{{ old('photo_5') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_10" name="photo_10" value="{{ old('photo_6') }}" /></span>
								<span class="btn btn-default btn-file glyphicon glyphicon-camera"><input class="form-control" type="file" id="photo_11" name="photo_11" value="{{ old('photo_7') }}" /></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 divisor-line">
						<div class="row row-form">
							<div class="col-sm-12"><label>Ubicacion del vehículo</label></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="actual_city" placeholder="Ciudad" value="{{ old('actual_city') }}"/></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="actual_region" placeholder="Departamento" value="{{ old('actual_region') }}"/></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="neighborhood" placeholder="Barrio" value="{{ old('neighborhood') }}" /></div>
						</div>
					</div>
					<div class="col-md-6 ">
						<div class="row row-form">
							<div class="col-md-12"><label>Seguridad del vehículo</label></div>
							<div class="col-xs-6"><input class="form-control" type="" id="" name="alarm" placeholder="Alarma" value="{{ old('alarm') }}" /></div>
							<div class="col-xs-6"><input class="form-control" type="" id="" name="insurance_policy" placeholder="Poliza de seguro" value="{{ old('insurance_policy') }}" /></div>
							<div class="col-xs-6"><input class="form-control" type="" id="" name="armored" placeholder="Blindado" value="{{ old('armored') }}" /></div>
							<div class="col-xs-6"><input class="form-control" type="" id="" name="satelite" placeholder="Rastreo satelital" value="{{ old('satelite') }}" /></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 divisor-line">
						<div class="row row-form">
							<div class="col-md-12"><label>Datos del vehículo</label></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="motor" placeholder="Motor" value="{{ old('motor') }}" /></div>
							<div class="col-sm-4"><select  class="form-control" name="transmision">
							   <option value="Automática" {{ old('transmission') == 'Automática' ? "selected='true'" : "" }}>Automática</option>
							   <option value="Manual" {{ old('transmission') == 'Manual' ? "selected='true'" : "" }}>Manual</option>
							   <option value="Mixta" {{ old('transmission') == 'Mixta' ? "selected='true'" : "" }}>Mixta</option>
							   <option value="Secuencial" {{ old('transmission') == 'Secuencial' ? "selected='true'" : "" }}>Secuencial</option>
							   <option value="Steptronic" {{ old('transmission') == 'Steptronic' ? "selected='true'" : "" }}>Steptronic</option>
							   <option value="Tiptronic" {{ old('transmission') == 'Tiptronic' ? "selected='true'" : "" }}>Tiptronic</option>
							</select></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="cylinder" placeholder="Cilindraje" value="{{ old('cylinder') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="km" placeholder="Kilometraje" value="{{ old('km') }}" /></div>
							<div class="col-sm-4"><select  class="form-control" name="combustible">
							   <option value="Diesel" {{ old('combustible') == 'Diesel' ? "selected='true'" : ""}}>Diesel</option>
							   <option value="Electrico" {{ old('combustible') == 'Electrico' ? "selected='true'" : ""}}>Electrico</option>
							   <option value="Gas" {{ old('combustible') == 'Gas' ? "selected='true'" : ""}}>Gas</option>
							   <option value="Gasolina" {{ old('combustible') == 'Gasolina' ? "selected='true'" : ""}}>Gasolina</option>
							   <option value="Hibrido" {{ old('combustible') == 'Hibrido' ? "selected='true'" : ""}}>Hibrido</option>
							</select></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="number_cylinder" placeholder="N° de Cilindros" value="{{ old('number_cylinder') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="tapiz" placeholder="Tapizados" value="{{ old('tapiz') }}" /></div>
							<div class="col-sm-4"><select  class="form-control" name="brakes">
							   <option value="ABS" {{ old('brakes') == 'ABS' ? "selected='true'" : ""}}>ABS</option>
							   <option value="Disco" {{ old('brakes') == 'Disco' ? "selected='true'" : ""}}>Disco</option>
							</select></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="color_tapiz" placeholder="Color de Tapizados" value="{{ old('color_tapiz') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="cool_air" placeholder="Aire acondicionado" value="{{ old('cool_air') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="audio_system" placeholder="Sistema de Audio" value="{{ old('audio_system') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="computer" placeholder="Computadora" value="{{ old('computer') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="accesories" placeholder="accesorios" value="{{ old('accesories') }}" /></div>
							<div class="col-sm-4"><input class="form-control" type="" id="" name="which_accesories" placeholder="Cuales" value="{{ old('which_accesories') }}" /></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row row-form">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<label>Descipcion del vehiculo</label>	
										<textarea name="description" class="form-control" rows="5" id="comment"></textarea>
									</div>	
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6 divisor-line">
						<div class="row row-form">
							<div class="col-md-12"><label>Negocio</label></div>		
							<input class="form-control" type="" id="" name="financiacion" placeholder="Financiamiento" value="{{ old('financiacion') }}" />
						</div>
					</div>
				</div>		
				<div class="row">
					<div class="col-xs-12 col-md-6 ">	
						<div class="div-captcha">
							{!! Recaptcha::render() !!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">	
						<input class="form-control bt-submit" type="submit" value="Submit">
					</div>
				</div>
						
						
				
			</div>
		</form>
	</div>
</body>
</html>