<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanans.index', compact('layanans'));
    }

    public function create()
    {
        return view('layanans.create');
    }

    public function store(Request $request)
    {
        Layanan::create($request->all());
        return redirect()->route('layanans.index');
    }

    public function show(Layanan $layanan)
    {
        return view('layanans.show', compact('layanan'));
    }

    public function edit(Layanan $layanan)
    {
        return view('layanans.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $layanan->update($request->all());
        return redirect()->route('layanans.index');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanans.index');
    }
}
