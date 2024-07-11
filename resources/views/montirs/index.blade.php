<x-layout>
    <x-slot name="title">Daftar Montir</x-slot>
    <x-slot name="card_title">Daftar Montir Aktif</x-slot>
    <x-slot name="card_footer">@MontirNF</x-slot>

    <h2 class="text-center">Data Montir</h2>
    <a href="{{ route('montirs.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($montirs as $montir)
                <tr>
                    <td>{{ $montir->id }}</td>
                    <td>{{ $montir->nomor }}</td>
                    <td>{{ $montir->nama }}</td>
                    <td>{{ $montir->gender }}</td>
                    <td>{{ $montir->tgl_lahir }}</td>
                    <td>{{ $montir->tmp_lahir }}</td>
                    <td>{{ $montir->keahlian }}</td>
                    <td>{{ $montir->kategori ? $montir->kategori->nama : 'Kategori Tidak Ditemukan' }}</td>
                    <td>
                        <a href="{{ route('montirs.show', $montir->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('montirs.edit', $montir->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('montirs.destroy', $montir->id) }}" method="POST" style="display:inline;">
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
