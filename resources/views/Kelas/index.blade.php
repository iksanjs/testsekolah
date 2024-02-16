<!-- resources/views/kelas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Kelas</h2>
                <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas Baru</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tahun Ajaran</th>
                            <th>Kelas</th>
                            <th>NISN</th>
                            <!-- Tambahkan kolom lain jika diperlukan -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->tahun_ajaran }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->nisn }}</td>
                                <!-- Tambahkan kolom lain jika diperlukan -->
                                <td>
                                    <a href="{{ route('kelas.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('kelas.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus kelas ini?')">Hapus</button>
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
