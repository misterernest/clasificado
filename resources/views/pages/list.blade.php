@forelse ($vehicles as $vehicle)
	
	Nombre: {!! $vehicle->name_user !!} - Email: {!! $vehicle->email !!}

@empty
	
	<h1>No hay registros</h1>

@endforelse