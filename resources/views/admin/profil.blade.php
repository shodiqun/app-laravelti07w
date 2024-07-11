<x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilku</title>
</head>
<body>
    <h1>selamat datang di profil  saya</h1>
    <h2>nama:  Aril</h2>
    <h2>Prodi:  TI07</h2>
    <h2>Matkul:  pemweb2</h2>
    <hr>

    @php
    $nama = 'Aril';
    $nilai = 100;
    //echo 'Apa kabar '. $nama . '?';
    @endphp
    @if ($nilai >=60)
        @php $ket = "LULUS"; @endphp
    @else 
    @php $ket = "GAGAL"; @endphp
    @endif

    <h2> Nama saya : {{$nama}} Dengan nilai: {{$nilai}} dinyatakan: {{$ket}} </h2>
</body>
</html>
</x-layout>