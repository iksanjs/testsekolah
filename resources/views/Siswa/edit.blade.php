<!-- resources/views/siswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Siswa</h2>
                <form action="{{ route('siswa.update', $siswa->nisn) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}">
                    </div>
                    <!-- Tambahkan input untuk properti lainnya jika diperlukan -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
