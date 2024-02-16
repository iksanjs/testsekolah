<!-- resources/views/kelas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Kelas</h2>
                <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tahun_ajaran">Tahun Ajaran:</label>
                        <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}">
                    </div>
                    <!-- Tambahkan input untuk properti lainnya jika diperlukan -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
