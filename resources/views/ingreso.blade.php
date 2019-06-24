<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ingreso de datos</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col">nombre</th>
				<th scope="col">apellido</th>
				<th scope="col">cedula</th>
			</tr>
		</thead>
		<tbody>
			@foreach(Session::get('user.nombre') as $nombre)
			<tr>
				<td>{{$nombre}}</td>
				<td>{{Session::get('user.apellido')[$loop->index]}}</td>
				<td>{{Session::get('user.cedula')[$loop->index]}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	
</body>
</html>