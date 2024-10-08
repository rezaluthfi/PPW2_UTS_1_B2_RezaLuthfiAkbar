<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pemain = Pemain::all();

        $total_pemain = $data_pemain->count();

        return view('pemain.index', compact('data_pemain', 'total_pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemain = new Pemain;
        $pemain->nama = $request->nama;
        $pemain->posisi = $request->posisi;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->save();
        return redirect('/players')->with('success', 'Data pemain berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemain = Pemain::find($id);
        return view('pemain.show', compact('pemain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemain = Pemain::find($id);
        return view('pemain.edit', compact('pemain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required|integer',
        ]);

        $pemain = Pemain::find($id);
        $pemain->nama = $request->nama;
        $pemain->posisi = $request->posisi;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->save();
    
        return redirect('/players')->with('success', 'Data pemain berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemain = Pemain::find($id);
        $pemain->delete();

        return redirect('/players')->with('success', 'Data pemain berhasil dihapus');
    }
}
