<!-- resources/views/siswa/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Siswa</h2>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa Baru</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <!-- Tambahkan kolom lain jika diperlukan -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->alamat }}</td>
                                <!-- Tambahkan kolom lain jika diperlukan -->
                                <td>
                                    <a href="{{ route('siswa.show', $item->nisn) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('siswa.edit', $item->nisn) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('siswa.destroy', $item->nisn) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
