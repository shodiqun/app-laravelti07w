<x-layout>
    <x-slot name="title">Edit Layanan</x-slot>
    <x-slot name="card_title">Form Edit Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <div class="container">
        <h1>Edit Layanan</h1>
        <form action="{{ route('layanans.update', $layanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" class="form-control" id="kode" value="{{ $layanan->kode }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $layanan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $layanan->deskripsi }}">
            </div>
            <div class="form-group">
                <label for="jenis_layanan_id">Jenis Layanan</label>
                <input type="number" name="jenis_layanan_id" class="form-control" id="jenis_layanan_id" value="{{ $layanan->jenis_layanan_id }}">
            </div>
            <div class="form-group">
                <label for="total_biaya">Total Biaya</label>
                <input type="number" name="total_biaya" class="form-control" id="total_biaya" value="{{ $layanan->total_biaya }}">
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" name="rating" class="form-control" id="rating" value="{{ $layanan->rating }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-layout>
