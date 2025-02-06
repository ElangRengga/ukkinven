<!-- resources/views/admin/lokasi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Lokasi Baru</h1>

        <form action="{{ route('admin.lokasi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
            </div>
            <div class="mb-3">
                <label for="kode_lokasi" class="form-label">Kode Lokasi</label>
                <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi">
            </div>
            <select name="keterangan" class="form-control" style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        <option value="baik">baik</option>
        <option value="rusak">rusak</option>
        <option value="sedang_di_servis">Sedang di Servis</option>
    </select>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
