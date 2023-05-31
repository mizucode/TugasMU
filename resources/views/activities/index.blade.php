<!-- resources/views/activities/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Kegiatan</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="NamaKegiatan">Nama Kegiatan</label>
            <input type="text" name="NamaKegiatan" id="NamaKegiatan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Deskripsi">Deskripsi</label>
            <textarea name="Deskripsi" id="Deskripsi" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="TanggalMulai">Tanggal Mulai</label>
            <input type="date" name="TanggalMulai" id="TanggalMulai" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="TanggalSelesai">Tanggal Selesai</label>
            <input type="date" name="TanggalSelesai" id="TanggalSelesai" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
