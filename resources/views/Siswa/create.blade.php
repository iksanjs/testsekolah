<!-- resources/views/siswa/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Siswa Baru</h2>
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" class="form-control" id="nisn" name="nisn">
                    </div>
                    <!-- Tambahkan input untuk properti lainnya jika diperlukan -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
