@extends('admin.dashboard.partials.master') 
@section('title')
    Daftar Produk
@endsection

@section('content')
    
        
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Tipe Kulit</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $item->nama_produk }}</td>
                                        <td class="text-bold-500">{{ $item->harga }}</td>
                                        <td class="text-bold-500">{{ $item->skin_type }}</td>
                                        <td class="text-bold-500">{{ $item->kategori }}</td>
                                        <td class="text-bold-500">{{ $item->stok }}</td>
                                        <td class="text-bold-500">{{ $item->deskripsi }}</td>
                                        <td class="text-bold-500">{{ $item->gambar }}</td>
                                        
                                       
                                        <td class="text-bold-500 d-flex">
                                            <a href="{{ route('list.edit', $item->id) }}"
                                                class="btn icon btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                                
                                            <form action="{{ route('list.destroy', $item->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn icon btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
