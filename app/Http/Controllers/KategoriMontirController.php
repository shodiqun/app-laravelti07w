<?php

namespace App\Http\Controllers;

use App\Models\KategoriMontir;
use Illuminate\Http\Request;

class KategoriMontirController extends Controller
{
    public function index()
    {
        $kategories = KategoriMontir::all();
        return view('kategori_montirs.index', compact('kategories'));
    }

    public function create()
    {
        return view('kategori_montirs.create');
    }

    public function store(Request $request)
    {
        KategoriMontir::create($request->all());
        return redirect()->route('kategori_montirs.index');
    }

    public function show(KategoriMontir $kategori_montir)
    {
        return view('kategori_montirs.show', compact('kategori_montir'));
    }

    public function edit(KategoriMontir $kategori_montir)
    {
        return view('kategori_montirs.edit', compact('kategori_montir'));
    }

    public function update(Request $request, KategoriMontir $kategori_montir)
    {
        $kategori_montir->update($request->all());
        return redirect()->route('kategori_montirs.index');
    }

    public function destroy(KategoriMontir $kategori_montir)
    {
        $kategori_montir->delete();
        return redirect()->route('kategori_montirs.index');
    }
}
