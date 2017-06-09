<!DOCTYPE html>
<html>
<head>
    <title>Nama Nama Hewan</title>
</head>
<body>
<H1>Daftar Hewan-Hewanan</H1>
@foreach ($hewan as $data)
    <li>{{$data}}
</li>
@endforeach
</body>
</html>