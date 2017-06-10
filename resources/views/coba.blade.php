<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>
<body>
<table border="2">
	<tr>
	<th>Id</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>jurusan</th>
		<th>Jenis_kelamin</th>
	</tr>	
	@foreach ($a as $data)
	<tr>
		<td>{{$data->id}}</td>
		<td>{{$data->nama}}</td>
		<td>{{$data->kelas}}</td>
		<td>{{$data->jurusan}}</td>
		<td>{{$data->jenis_kelamin}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>