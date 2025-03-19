<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Menampilkan daftar pendidikan.
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Menampilkan form tambah pendidikan.
     */
    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create', compact('pendidikan'));
    }

    /**
     * Menyimpan data pendidikan ke dalam database.
     */
    public function store(Request $request)
    {
        Pendidikan::create($request->all());
        return redirect()->route('pendidikan.index')
        ->with('success', 'Data pendidikan berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit pendidikan.
     */
    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Mengupdate data pendidikan.
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil diperbarui!');
    }

    /**
     * Menghapus data pendidikan dengan konfirmasi.
     */
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil dihapus!');
    }
}