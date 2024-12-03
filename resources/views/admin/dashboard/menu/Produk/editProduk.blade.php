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
                </div>
                <div class="card-body">
                    {{-- route disini merupakan bagian edit yang membawa parameter id bisa dicek pada web.php --}}
                    <form class="form" action="{{ route('list.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf 
                        @method('PATCH')
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ $data->nama_produk }}" autocomplete="off">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" value="{{ $data->harga }}" autocomplete="off">
                                    @error('harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tipe Skin Produk</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('skin_type') is-invalid @enderror" id="basicSelect"
                                            name="skin_type">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('skin_type') == 'Kering(Dry)' ? 'selected' : '' }} value="Kering(Dry)">Untuk Kulit Kering</option>
                                            <option {{ old('skin_type') == 'Berminyak(Oily)' ? 'selected' : '' }} value="Berminyak(Oily)">Untuk Kulit Berminyak</option>
                                            <option {{ old('skin_type') == 'Normal_Skin' ? 'selected' : '' }} value="Normal_Skin">Untuk Kulit Normal</option>
                                            <option {{ old('skin_type') == 'Kombinasi_skin(Dry_Oily)' ? 'selected' : '' }} value="Kombinasi_skin(Dry_Oily)">Untuk Kulit Kombinasi</option>
                                        </select>
                                        @error('skin_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Kategori Produk</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('kategori') is-invalid @enderror" id="basicSelect"
                                            name="kategori">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('kategori') == 'Serum' ? 'selected' : '' }} value="Serum">Serum</option>
                                            <option {{ old('kategori') == 'Moisturizer' ? 'selected' : '' }} value="Moisturizer">Moisturizer</option>
                                            <option {{ old('kategori') == 'Sunscreen' ? 'selected' : '' }} value="Sunscreen">Sunscreen</option>
                                            <option {{ old('kategori') == 'Facial_wash' ? 'selected' : '' }} value="Facial_wash">Facial wash</option>
                                            <option {{ old('kategori') == 'Toner' ? 'selected' : '' }} value="Toner">Toner</option>
                                        </select>
                                        @error('kategori')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                        name="stok" value="{{ $data->stok }}" autocomplete="off">
                                    @error('stok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi" value="{{ $data->deskripsi }}" autocomplete="off">
                                    @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar" value="{{ $data->gambar }}" autocomplete="off">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                
                                
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/extensions/filepond/filepond.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/filepond.css ') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/pages/filepond.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   
@endsection
