@if (Auth::guest())
	$log=1
@else
	Si ha iniciado sesion
@endif

<div>
	ID: {{ $vehicle->id }}
	Nombre: {{ $vehicle->name }}
	Email: {{ $vehicle->email }}
</div>