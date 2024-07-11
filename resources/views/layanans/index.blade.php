<x-layout>
    <x-slot name="title">Daftar Layanan</x-slot>
    <x-slot name="card_title">Daftar Layanan Aktif</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <h2 class="text-center">Data Layanan</h2>
    <a href="{{ route('layanans.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Jenis Layanan</th>
                <th>Total Biaya</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($layanans as $layanan)
                <tr>
                    <td>{{ $layanan->id }}</td>
                    <td>{{ $layanan->kode }}</td>
                    <td>{{ $layanan->nama }}</td>
                    <td>{{ $layanan->deskripsi }}</td>
                    <td>{{ $layanan->jenis_layanan_id }}</td>
                    <td>{{ $layanan->total_biaya }}</td>
                    <td>{{ $layanan->rating }}</td>
                    <td>
                        <a href="{{ route('layanans.show', $layanan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('layanans.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('layanans.destroy', $layanan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
