<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabungan</title>
</head>
<body>
	<center>Daftar Tabungan</center>
    @foreach($tabungan as $data)
    

    <br>Nama 	: {{$data->nama}}
    <br>Nis 	: {{$data->nis}}
    <br>Kelas 	: {{$data->kelas}}
    <br>Jumlah 	: {{$data->jml}}
    @if($data->jml > 25000)
    <br>Paket 	: Paket C
    @elseif($data->jml >10000)
    <br>Paket 	: Paket B
    @elseif($data->jml > 1000)
    <br>Paket 	: Paket A
    @endif
    <hr>
    @endforeach
</body>
</html>