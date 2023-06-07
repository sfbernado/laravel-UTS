<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dosen::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'fakultas' => 'required',
        ]);
        $dosen = new Dosen;
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->fakultas = $request->fakultas;
        $dosen->save();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'fakultas' => 'required',
        ]);
        $dosen = Dosen::find($dosen->id);
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->fakultas = $request->fakultas;
        $dosen->save();
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
