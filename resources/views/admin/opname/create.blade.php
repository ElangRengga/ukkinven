@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tambah Opname</h1>
        <form action="{{ route('admin.opname.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pengadaan</label>
                <select name="id_pengadaan" class="form-control">
                    @foreach($pengadaans as $pengadaan)
                        <option value="{{ $pengadaan->id_pengadaan }}">{{ $pengadaan->masterBarang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Opname</label>
                <input type="date" name="tgl_opname" class="form-control">
            </div>
            <select name="keterangan" class="form-control" style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        <option value="baik">baik</option>
        <option value="rusak">rusak</option>
        <option value="sedang_di_servis">Sedang di Servis</option>
    </select>
            <!-- <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div> -->
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection