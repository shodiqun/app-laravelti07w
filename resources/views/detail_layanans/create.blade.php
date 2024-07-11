<x-layout>
    <x-slot name="title">Tambah Layanan</x-slot>
    <x-slot name="card_title">Form Tambah Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>

    <div class="container">
    <div class="container">
        <h1>Tambah Detail Layanan</h1>
        <form action="{{ route('detail_layanans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya</label>
                <input type="number" name="biaya" class="form-control" id="biaya" required>
            </div>
            <div class="form-group">
                <label for="layanan_id">Layanan</label>
                <select name="layanan_id" class="form-control" id="layanan_id" required>
                    @foreach ($layanans as $layanan)
                        <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pj_montir_id">Montir</label>
                <select name="pj_montir_id" class="form-control" id="pj_montir_id" required>
                    @foreach ($montirs as $montir)
                        <option value="{{ $montir->id }}">{{ $montir->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </x-layout>
