<x-layout>
    <x-slot name="title">Tambah Layanan</x-slot>
    <x-slot name="card_title">Form Tambah Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <div class="container">
        <h1>Edit Kategori Montir</h1>
        <form action="{{ route('kategori_montirs.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $kategori->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </x-layout>
