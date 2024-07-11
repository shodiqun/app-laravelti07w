<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use App\Models\Layanan;
use App\Models\Montir;
use Illuminate\Http\Request;

class DetailLayananController extends Controller
{
    public function index()
    {
        $detail_layanans = DetailLayanan::with(['layanan', 'montir'])->get();
        return view('detail_layanans.index', compact('detail_layanans'));
    }

    public function create()
    {
        $layanans = Layanan::all();
        $montirs = Montir::all();
        return view('detail_layanans.create', compact('layanans', 'montirs'));
    }

    public function store(Request $request)
    {
        DetailLayanan::create($request->all());
        return redirect()->route('detail_layanans.index');
    }

    public function show(DetailLayanan $detail_layanan)
    {
        return view('detail_layanans.show', compact('detail_layanan'));
    }

    public function edit(DetailLayanan $detail_layanan)
    {
        $layanans = Layanan::all();
        $montirs = Montir::all();
        return view('detail_layanans.edit', compact('detail_layanan', 'layanans', 'montirs'));
    }

    public function update(Request $request, DetailLayanan $detail_layanan)
    {
        $detail_layanan->update($request->all());
        return redirect()->route('detail_layanans.index');
    }

    public function destroy(DetailLayanan $detail_layanan)
    {
        $detail_layanan->delete();
        return redirect()->route('detail_layanans.index');
    }
}
