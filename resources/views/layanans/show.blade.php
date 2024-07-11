<x-layout>
    <x-slot name="title">Detail Layanan</x-slot>
    <x-slot name="card_title">Detail Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <div class="container">
        <h1>Detail Layanan</h1>
        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <td>{{ $layanan->id }}</td>
            </tr>
            <tr>
                <th>Kode</th>
                <td>{{ $layanan->kode }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $layanan->nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $layanan->deskripsi }}</td>
            </tr>
            <tr>
                <th>Jenis Layanan</th>
                <td>{{ $layanan->jenis_layanan_id }}</td>
            </tr>
            <tr>
                <th>Total Biaya</th>
                <td>{{ $layanan->total_biaya }}</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>{{ $layanan->rating }}</td>
            </tr>
        </table>
        <a href="{{ route('layanans.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</x-layout>
