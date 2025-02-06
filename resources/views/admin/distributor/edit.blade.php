@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Distributor</h1>

        <form action="{{ route('admin.distributor.update', $distributor->id_distributor) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_distributor" class="form-label">Nama Distributor</label>
                <input type="text" class="form-control @error('nama_distributor') is-invalid @enderror" id="nama_distributor" name="nama_distributor" value="{{ old('nama_distributor', $distributor->nama_distributor ) }}">
                @error('nama_distributor')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $distributor->alamat ) }}">
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No_Telp</label>
                <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp', $distributor->no_telp ) }}">
                @error('no_telp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $distributor->email ) }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <select name="keterangan" class="form-control" style="padding: 0.9rem; font-size: 1rem; border-radius: 5px; background: rgba(255, 255, 255, 0.8); box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
        <option value="aktif">aktif</option>
        <option value="bangkrut">bangkrut</option>
    </select>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.distributor.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
