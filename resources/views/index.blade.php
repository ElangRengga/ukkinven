@extends('layouts.app')

@section('title', 'Inventaris Barang')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Daftar Inventaris Barang</h1>
            <a href="{{ route('inventory.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventories as $inventory)
                    <tr>
                        <td>{{ $inventory->name }}</td>
                        <td>{{ $inventory->quantity }}</td>
                        <td>{{ $inventory->description }}</td>
                        <td>
                            <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
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
