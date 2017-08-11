/*@if (Session::has('error-messages'))
	{{ Session::get('error-messages') }}
@endif*/

@forelse ($vehicles as $vehicle)
	
	Nombre: {!! $vehicle->name_user !!}
	Email: {!! $vehicle->email !!}
	Teléfono {!! $vehicle->cellphone !!}
	Marca {!! $vehicle->brand !!}
	Modelo {!! $vehicle->year !!}
	País de origen {!! $vehicle->country_origin !!}
	Color {!! $vehicle->color !!}
	Serie del carro {!! $vehicle->ref_car !!}
	Tipo de carro {!! $vehicle->type_car !!}
	$ Costo {!! $vehicle->value !!}
	Negociable {!! $vehicle->negociable !!}
	Ciudad {!! $vehicle->actual_city !!}
	Departamento {!! $vehicle->actual_region !!}
	<br>
	<br>
@empty
	
	<h1>No hay registros</h1>

@endforelse