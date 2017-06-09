<!DOCTYPE html>
<html>
<head>
	<title>Nama Nama Buah</title>
</head>
<body>
<H1>Daftar Buah-buahan</H1>
@foreach ($buah as $data)
	<li>{{$data}}
</li>
@endforeach
</body>
</html>