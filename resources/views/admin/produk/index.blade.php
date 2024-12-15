@extends('admin.dashboard.partials.master')
@section('title')
Daftar Produk
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>@yield('title')</h4>
                <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk Baru</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Filter dan Pencarian -->
                <form method="GET" action="{{ route('produk.index') }}" class="row mb-4">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Cari produk..."
                            value="{{ request('search') }}">
                    </div>
                    <div class="col-md-4">
                        <select name="kategori" class="form-select">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->kategori }}"
                                {{ request('kategori') == $category->kategori ? 'selected' : '' }}>
                                {{ ucfirst(str_replace('_', ' ', $category->kategori)) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </form>

                <!-- Tabel Produk -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Skin Type</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($produks as $produk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $produk->kategori)) }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $produk->skin_type)) }}</td>
                                <td>
                                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data produk.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection