<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactenos</title>
</head>
<body>
	
	@if ($errors->has()) 
		Debes corregir los siguientes errores
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	<form action="{{ route('send') }}" method="POST">
		{{ csrf_field() }}
		<input type="email" name="email"><br>
		<input type="text" name="subject"><br>
		<textarea name="body"></textarea><br>
		{!! Recaptcha::render() !!}
		<input type="submit" value="Enviar">
	</form>

</body>
</html>