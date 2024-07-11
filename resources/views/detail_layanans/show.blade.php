<x-layout>
    <x-slot name="title">Detail Layanan</x-slot>
    <x-slot name="card_title">Detail Layanan</x-slot>
    <x-slot name="card_footer">@DetailLayananNF</x-slot>

    <div class="container">
        <h1>Detail Layanan</h1>
        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <td>{{ $detail_layanan->id }}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $detail_layanan->pekerjaan }}</td>
            </tr>
            <tr>
                <th>Biaya</th>
                <td>{{ $detail_layanan->biaya }}</td>
            </tr>
            <tr>
                <th>Layanan</th>
                <td>{{ $detail_layanan->layanan ? $detail_layanan->layanan->nama : 'Layanan Tidak Ditemukan' }}</td>
            </tr>
            <tr>
                <th>Montir</th>
                <td>{{ $detail_layanan->montir ? $detail_layanan->montir->nama : 'Montir Tidak Ditemukan' }}</td>
            </tr>
        </table>
        <a href="{{ route('detail_layanans.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</x-layout>
