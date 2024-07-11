<x-layout>
    <x-slot name="title">Tambah Layanan</x-slot>
    <x-slot name="card_title">Form Tambah Layanan</x-slot>
    <x-slot name="card_footer">@LayananNF</x-slot>


    <div class="container">
        <h1>Edit Detail Layanan</h1>
        <form action="{{ route('detail_layanans.update', $detail->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="{{ $detail->pekerjaan }}" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya</label>
                <input type="number" name="biaya" class="form-control" id="biaya" value="{{ $detail->biaya }}" required>
            </div>
            <div class="form-group">
                <label for="layanan_id">Layanan</label>
                <select name="layanan_id" class="form-control" id="layanan_id" required>
                    @foreach ($layanans as $layanan)
                        <option value="{{ $layanan->id }}" {{ $detail->layanan_id == $layanan->id ? 'selected' : '' }}>{{ $layanan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pj_montir_id">Montir</label>
                <select name="pj_montir_id" class="form-control" id="pj_montir_id" required>
                    @foreach ($montirs as $montir)
                        <option value="{{ $montir->id }}" {{ $detail->pj_montir_id == $montir->id ? 'selected' : '' }}>{{ $montir->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </x-layout>
