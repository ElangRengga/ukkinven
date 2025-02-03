<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold text-gray-700">Welcome to Asset Management</h3>
                <p class="text-gray-500 mt-1">Kelola aset Anda dengan mudah dan efisien.</p>

                {{-- Statistik Kartu --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                        <h4 class="text-lg font-semibold text-blue-700">Total Assets</h4>
                        <p class="text-3xl font-bold text-blue-800 mt-2">120</p>
                        <p class="text-sm text-gray-600">Aset yang tercatat</p>
                    </div>
                    
                    <div class="bg-yellow-100 p-6 rounded-lg shadow-md text-center">
                        <h4 class="text-lg font-semibold text-yellow-700">Maintenance Due</h4>
                        <p class="text-3xl font-bold text-yellow-800 mt-2">5</p>
                        <p class="text-sm text-gray-600">Aset perlu perawatan</p>
                    </div>

                    <div class="bg-red-100 p-6 rounded-lg shadow-md text-center">
                        <h4 class="text-lg font-semibold text-red-700">Disposed Assets</h4>
                        <p class="text-3xl font-bold text-red-800 mt-2">2</p>
                        <p class="text-sm text-gray-600">Aset yang telah dibuang</p>
                    </div>
                </div>

                {{-- Aksi Cepat --}}
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <a href="{{ route('kategori_asset.index') }}" class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow hover:bg-blue-700 transition">
                        Kelola Aset
                    </a>
                    <a href="{{ route('reports.index') }}" class="bg-green-600 text-white py-3 px-6 rounded-lg shadow hover:bg-green-700 transition">
                        Lihat Laporan
                    </a>
                    <a href="{{ route('settings') }}" class="bg-gray-600 text-white py-3 px-6 rounded-lg shadow hover:bg-gray-700 transition">
                        Pengaturan
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
