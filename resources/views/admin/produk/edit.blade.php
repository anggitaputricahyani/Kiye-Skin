@extends('admin.dashboard.partials.master')
@section('title')
Edit Produk
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
                <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                        @error('nama_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" required>
                        @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required>
                        @error('stok')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="skin_type" class="form-label">Tipe Skin Produk</label>
                        <select class="form-select @error('skin_type') is-invalid @enderror" name="skin_type" id="skin_type" required>
                            <option value="">-- Pilih --</option>
                            <option {{ old('skin_type', $produk->skin_type) == 'Dry' ? 'selected' : '' }} value="Dry">Untuk Kulit Kering</option>
                            <option {{ old('skin_type', $produk->skin_type) == 'Oily' ? 'selected' : '' }} value="Oily">Untuk Kulit Berminyak</option>
                            <option {{ old('skin_type', $produk->skin_type) == 'Normal_Skin' ? 'selected' : '' }} value="Normal_Skin">Untuk Kulit Normal</option>
                            <option {{ old('skin_type', $produk->skin_type) == 'Dry_Oily' ? 'selected' : '' }} value="Dry_Oily">Untuk Kulit Kombinasi</option>
                            <option {{ old('skin_type', $produk->skin_type) == 'Sensitive_Skin' ? 'selected' : '' }} value="Sensitive_Skin">Untuk Kulit Sensitif</option>
                        </select>
                        @error('skin_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Produk</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" name="kategori" id="kategori" required>
                            <option value="">-- Pilih --</option>
                            <option {{ old('kategori', $produk->kategori) == 'Serum' ? 'selected' : '' }} value="Serum">Serum</option>
                            <option {{ old('kategori', $produk->kategori) == 'Moisturizer' ? 'selected' : '' }} value="Moisturizer">Moisturizer</option>
                            <option {{ old('kategori', $produk->kategori) == 'Sunscreen' ? 'selected' : '' }} value="Sunscreen">Sunscreen</option>
                            <option {{ old('kategori', $produk->kategori) == 'Facial_wash' ? 'selected' : '' }} value="Facial_wash">Facial wash</option>
                            <option {{ old('kategori', $produk->kategori) == 'Toner' ? 'selected' : '' }} value="Toner">Toner</option>
                        </select>
                        @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto Produk</label>
                        @if($produk->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Foto Produk" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                        </div>
                        @endif
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection