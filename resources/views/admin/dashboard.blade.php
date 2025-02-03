@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="fw-bold text-primary">Asset Management Dashboard</h1>
            <p class="text-muted">Kelola aset Anda dengan mudah dan cepat.</p>
        </div>
    </div>

    {{-- Statistik Kartu --}}
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="card-title text-success fw-bold">Total Assets</h5>
                    <h3 class="fw-bold">120</h3>
                    <p class="text-muted">Aset yang tercatat</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="card-title text-warning fw-bold">Maintenance Due</h5>
                    <h3 class="fw-bold">5</h3>
                    <p class="text-muted">Aset perlu perawatan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="card-title text-danger fw-bold">Disposed Assets</h5>
                    <h3 class="fw-bold">2</h3>
                    <p class="text-muted">Aset yang telah dibuang</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Aksi Cepat --}}
    {{-- <div class="row mt-5 text-center">
        <div class="col-md-4">
            <a href="{{ route('assets.index') }}" class="btn btn-primary btn-lg w-100 shadow">Kelola Aset</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('reports.index') }}" class="btn btn-success btn-lg w-100 shadow">Lihat Laporan</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('settings') }}" class="btn btn-secondary btn-lg w-100 shadow">Pengaturan</a>
        </div>
    </div> --}}
</div>
@endsection
