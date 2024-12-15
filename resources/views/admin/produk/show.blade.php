@extends('admin.dashboard.partials.master')
@section('title')
Detail Produk
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>@yield('title')</h4>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke Daftar Produk</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nama Produk</h5>
                        <p>{{ $produk->nama_produk }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Harga</h5>
                        <p>Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Stok</h5>
                        <p>{{ $produk->stok }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Kategori</h5>
                        <p>{{ ucfirst(str_replace('_', ' ', $produk->kategori)) }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Skin Type</h5>
                        <p>{{ ucfirst(str_replace('_', ' ', $produk->skin_type)) }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Foto Produk</h5>
                        @if($produk->gambar)
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Foto Produk" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                        @else
                        <p>Tidak ada foto produk.</p>
                        @endif
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection