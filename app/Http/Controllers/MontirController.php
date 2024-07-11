<?php

namespace App\Http\Controllers;

use App\Models\Montir;
use App\Models\KategoriMontir;
use Illuminate\Http\Request;

class MontirController extends Controller
{
    public function index()
    {
        $montirs = Montir::with('kategori')->get();
        return view('montirs.index', compact('montirs'));
    }

    public function create()
    {
        $kategories = KategoriMontir::all();
        return view('montirs.create', compact('kategories'));
    }

    public function store(Request $request)
    {
        Montir::create($request->all());
        return redirect()->route('montirs.index');
    }

    public function show($id)
    {
        $montirs = Montir::findOrFail($id);
        return view('montirs.show', compact('montir'));
    }

    public function edit($id)
    {
        $montir = Montir::findOrFail($id);
        $kategories = KategoriMontir::all();
        return view('montirs.edit', compact('montir', 'kategories'));
    }

    public function update(Request $request, $id)
    {
        $montir = Montir::findOrFail($id);
        $montir->update($request->all());
        return redirect()->route('montirs.index');
    }

    public function destroy($id)
    {
        $montir = Montir::findOrFail($id);
        $montir->delete();
        return redirect()->route('montirs.index');
    }
}
