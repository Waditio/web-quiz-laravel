<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // READ: Menampilkan semua data siswa
    public function index() {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    // CREATE: Menyimpan data siswa baru ke database + VALIDASI INPUT
    public function store(Request $request) {
        $request->validate([
            'nisn' => 'required|numeric|unique:siswas,nisn',
            'nama' => 'required|string|max:255',
            'kelas' => 'required'
        ], [
            'nisn.required' => 'NISN wajib diisi!',
            'nisn.numeric' => 'NISN harus berupa angka!',
            'nisn.unique' => 'NISN sudah terdaftar!',
            'nama.required' => 'Nama lengkap wajib diisi!',
        ]);

        Siswa::create($request->all());
        return back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // UPDATE: Menyimpan perubahan data siswa
    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return back()->with('success', 'Data siswa berhasil diperbarui!');
    }

    // DELETE: Menghapus data siswa dari database
    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return back()->with('success', 'Data siswa berhasil dihapus!');
    }
}
