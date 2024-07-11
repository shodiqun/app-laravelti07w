<x-layout>
    <x-slot name="title">Detail Montir</x-slot>
    <x-slot name="card_title">Detail Montir</x-slot>
    <x-slot name="card_footer">@MontirNF</x-slot>

    <div class="container">
        <h1>Detail Montir</h1>
        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <td>{{ $montir->id }}</td>
            </tr>
            <tr>
                <th>Nomor</th>
                <td>{{ $montir->nomor }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $montir->nama }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $montir->gender }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $montir->tgl_lahir }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $montir->tmp_lahir }}</td>
            </tr>
            <tr>
                <th>Keahlian</th>
                <td>{{ $montir->keahlian }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $montir->kategori ? $montir->kategori->nama : 'Kategori Tidak Ditemukan' }}</td>
            </tr>
        </table>
        <a href="{{ route('montirs.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</x-layout>
