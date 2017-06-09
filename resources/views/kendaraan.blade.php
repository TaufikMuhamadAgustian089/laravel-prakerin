<!DOCTYPE html>
<html>
<head>
    <title>Nama Nama Motor</title>
</head>
<body>
<H1>Daftar Motor-Motoran</H1>
@foreach ($motor as $data)
    <li>{{$data}}
</li>
@endforeach
</body>
</html>