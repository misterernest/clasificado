<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
	@if (Session::has('errors'))
		Debes corregir los siguientes errores

		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>

	@endif
	<form action="{{ route('login') }}" method="POST">
		{{ csrf_field() }}
		<input type="email" name="email" />
		<input type="password" name="password" />
		<input type="submit" value="Iniciar Sesión">
	</form>

</body>
</html>