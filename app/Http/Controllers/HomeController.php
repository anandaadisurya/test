<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fungsi untuk menampilkan form
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('home', compact('mahasiswas'));
    }

    // Fungsi untuk menampilkan data mahasiswa
    public function read()
    {
        // Mengambil semua data mahasiswa dari database
        $mahasiswas = Mahasiswa::all();

        return view('read', compact('mahasiswas'));  // Nama view untuk menampilkan data
    }

    // Fungsi untuk menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('read')->with('success', 'Data Mahasiswa berhasil ditambahkan');
    }

    // Fungsi untuk menampilkan form edit data mahasiswa
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
    }

    // Fungsi untuk mengupdate data mahasiswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('read')->with('success', 'Data Mahasiswa berhasil diupdate');
    }

    // Fungsi untuk menghapus data mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('read')->with('success', 'Data Mahasiswa berhasil dihapus');
    }
}