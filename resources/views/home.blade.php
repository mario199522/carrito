<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mostrar</title>
	<link rel="stylesheet" href="">
</head>
<body>

<form action="{{url('/ingresar')}}" method="post" accept-charset="utf-8">
	{{csrf_field()}}
	<input type="text" name="nombre" placeholder="nombre" autocomplete="off">
	<input type="text" name="apellido" placeholder="apellido"autocomplete="off">
	<input type="text" name="cedula" placeholder="cedula" autocomplete="off">
	<button type="submit">guardar</button>
</form>

<h1><a href="{{url('/eliminar')}}">eliminar sesion</a></h1>
  
</body>
</html>