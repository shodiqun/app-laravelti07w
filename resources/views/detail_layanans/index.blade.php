<x-layout>
    <x-slot name="title">Detail Layanan</x-slot>
    <x-slot name="card_title">Detail Layanan</x-slot>
    <x-slot name="card_footer">@DetailLayananNF</x-slot>

    <div class="container">
        <h1>Detail Layanan</h1>
        <a href="{{ route('detail_layanans.create') }}" class="btn btn-primary mb-1">Tambah Detail</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pekerjaan</th>
                    <th>Biaya</th>
                    <th>Layanan</th>
                    <th>Montir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detail_layanans as $detail)
                    <tr>
                        <td>{{ $detail->id }}</td>
                        <td>{{ $detail->pekerjaan }}</td>
                        <td>{{ $detail->biaya }}</td>
                        <td>{{ $detail->layanan ? $detail->layanan->nama : 'Layanan Tidak Ditemukan' }}</td>
                        <td>{{ $detail->montir ? $detail->montir->nama : 'Montir Tidak Ditemukan' }}</td>
                        <td>
                            <a href="{{ route('detail_layanans.show', $detail->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('detail_layanans.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('detail_layanans.destroy', $detail->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
