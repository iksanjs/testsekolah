<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Menampilkan form untuk membuat siswa baru.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Menyimpan siswa baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nisn' => 'required|unique:siswa',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Buat objek siswa baru
        $siswa = new Siswa([
            'nisn' => $request->get('nisn'),
            // tambahkan properti lainnya sesuai kebutuhan
        ]);

        // Simpan siswa ke database
        $siswa->save();

        // Redirect ke halaman indeks siswa dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail siswa.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', ['siswa' => $siswa]);
    }

    /**
     * Menampilkan form untuk mengedit siswa.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Memperbarui informasi siswa yang ada di database.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $request->validate([
            // tambahkan aturan validasi sesuai kebutuhan
        ]);

        // Temukan siswa yang akan diperbarui
        $siswa = Siswa::findOrFail($id);

        // Perbarui properti siswa dengan data yang baru
        $siswa->update([
            // tambahkan properti yang akan diperbarui sesuai kebutuhan
        ]);

        // Redirect ke halaman detail siswa dengan pesan sukses
        return redirect()->route('siswa.show', $siswa->id)->with('success', 'Informasi siswa berhasil diperbarui.');
    }

    /**
     * Menghapus siswa dari database.
     */
    public function destroy(string $id)
    {
        // Temukan siswa yang akan dihapus
        $siswa = Siswa::findOrFail($id);

        // Hapus siswa dari database
        $siswa->delete();

        // Redirect ke halaman indeks siswa dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
