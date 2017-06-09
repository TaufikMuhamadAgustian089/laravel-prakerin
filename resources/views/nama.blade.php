<!DOCTYPE html>
<html>
<head>
	<title>Nama Nama Nama</title>
</head>
<body>
<H1>Daftar Nama</H1>
@foreach ($nama as $data)
	<li>{{$data}}
</li>
@endforeach
</body>
</html>