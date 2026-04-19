<?php

namespace App\Http\Controllers;

use App\Models\minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minuman = minuman::all();
        return view('minuman.index', compact('minuman'));
    }

    public function create()
    {
        return view('minuman.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_minuman' => 'required|string|max:255',
            'jenis_minuman' => 'required|string|max:255',
            'harga_minuman' => 'required|numeric',
        ]);

        // Simpan data ke database
        minuman::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('minuman.index')->with('success', 'Minuman berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $minuman = minuman::findOrFail($id);
        return view('minuman.edit', compact('minuman'));
    }

    public function update(Request $request, $id)
    {
        $minuman = minuman::findOrFail($id);
        $validatedData = $request->validate([
            'nama_minuman' => 'required',
            'jenis_minuman' => 'required',
            'harga_minuman' => 'required',
        ]);
        $minuman->update($validatedData);
        return redirect()->route('minuman.index')->with('success', 'Minuman berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $minuman = minuman::findOrFail($id);
        $minuman->delete();
        return redirect()->route('minuman.index')->with('success', 'Minuman berhasil di hapus!');
    }
}

