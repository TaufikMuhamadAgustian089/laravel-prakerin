<!DOCTYPE html>
<html>
<head>
	<title>Nama Nama Laptop</title>
</head>
<body>
            
<H1>Daftar Laptop</H1>
@foreach ($laptop as $l)
<li>{{$k}}</li>
@endforeach
Halaman Laravel {{$l}}         

<head>
	<title>Nama Nama Hewan</title>
</head>

<H1>Daftar Hewan</H1>
@foreach ($hewan as $h)
<li>{{$h}}</li>
@endforeach
Halaman Laravel {{$h}}

    </body>
</html>