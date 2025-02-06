@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Merk</h1>

    <form action="{{ route('admin.merk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merk" class="form-label">Nama Merk</label>
            <input type="text" name="merk" id="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old('merk') }}">
            @error('merk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <select name="keterangan" class="form-control" style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        <option value="aktif">pcs</option>
        <option value="bangkrut">box</option>
    </select>
        <div class="mb-3">
            <label for="satuan" class="form-label">jumlah</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.merk.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
