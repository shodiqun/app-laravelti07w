<x-layout>
    <x-slot name="title">Tambah Layanan</x-slot>
    <x-slot name="card_title">Form Tambah Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <div class="container">
        <h1>Daftar Kategori Montir</h1>
        <a href="{{ route('kategori_montirs.create') }}" class="btn btn-primary">Tambah Kategori</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategories as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama }}</td>
                        <td>
                            <a href="{{ route('kategori_montirs.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kategori_montirs.destroy', $kategori->id) }}" method="POST" style="display:inline;">
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
