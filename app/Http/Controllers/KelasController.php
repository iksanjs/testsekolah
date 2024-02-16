<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Menampilkan daftar kelas.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', ['kelas' => $kelas]);
    }

    /**
     * Menampilkan form untuk membuat kelas baru.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Menyimpan kelas baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            // tambahkan aturan validasi sesuai kebutuhan
        ]);

        // Buat objek kelas baru
        $kelas = new Kelas([
            // tambahkan properti yang dibutuhkan sesuai kebutuhan
        ]);

        // Simpan kelas ke database
        $kelas->save();

        // Redirect ke halaman indeks kelas dengan pesan sukses
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail kelas.
     */
    public function show(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', ['kelas' => $kelas]);
    }

    /**
     * Menampilkan form untuk mengedit kelas.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', ['kelas' => $kelas]);
    }

    /**
     * Memperbarui informasi kelas yang ada di database.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $request->validate([
            // tambahkan aturan validasi sesuai kebutuhan
        ]);

        // Temukan kelas yang akan diperbarui
        $kelas = Kelas::findOrFail($id);

        // Perbarui properti kelas dengan data yang baru
        $kelas->update([
            // tambahkan properti yang akan diperbarui sesuai kebutuhan
        ]);

        // Redirect ke halaman detail kelas dengan pesan sukses
        return redirect()->route('kelas.show', $kelas->id)->with('success', 'Informasi kelas berhasil diperbarui.');
    }

    /**
     * Menghapus kelas dari database.
     */
    public function destroy(string $id)
    {
        // Temukan kelas yang akan dihapus
        $kelas = Kelas::findOrFail($id);

        // Hapus kelas dari database
        $kelas->delete();

        // Redirect ke halaman indeks kelas dengan pesan sukses
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
