<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
</head>
<body>
	
	<form action="{{ route('send') }}" method="POST">
		{{ csrf_field() }}
		<input type="email" name="email"><br>
		<input type="text" name="subject"><br>
		<textarea name="body"></textarea><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>