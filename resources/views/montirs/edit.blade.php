<x-layout>
    <x-slot name="title">Edit Montir</x-slot>
    <x-slot name="card_title">Form Edit Montir</x-slot>
    <x-slot name="card_footer">@MontirNF</x-slot>

    <div class="container">
        <h1>Edit Montir</h1>
        <form action="{{ route('montirs.update', $montir->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" name="nomor" class="form-control" id="nomor" value="{{ $montir->nomor }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $montir->nama }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" class="form-control" id="gender" value="{{ $montir->gender }}" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $montir->tgl_lahir }}" required>
            </div>
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" value="{{ $montir->tmp_lahir }}" required>
            </div>
            <div class="form-group">
                <label for="keahlian">Keahlian</label>
                <input type="text" name="keahlian" class="form-control" id="keahlian" value="{{ $montir->keahlian }}">
            </div>
            <div class="form-group">
                <label for="kategori_montir_id">Kategori</label>
                <select name="kategori_montir_id" class="form-control" id="kategori_montir_id" required>
                    @foreach ($kategories as $kategori)
                        <option value="{{ $kategori->id }}" {{ $montir->kategori_montir_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-layout>
