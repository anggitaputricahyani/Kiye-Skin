@extends('admin.dashboard.partials.master') 
@section('title')
    Daftar Tiket
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
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Pembayaran</th>
                                    <th>Kendaraan</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $item->nama }}</td>
                                        <td class="text-bold-500">{{ $item->nomor_hp }}</td>
                                        <td class="text-bold-500">{{ $item->alamat }}</td>
                                        <td class="text-bold-500">{{ $item->tanggal }}</td>
                                        <td class="text-bold-500">{{ $item->asal }}</td>
                                        <td class="text-bold-500">{{ $item->tujuan }}</td>
                                        <td class="text-bold-500">{{ $item->pembayaran }}</td>
                                        <td class="text-bold-500">{{ $item->kendaraan }}</td>
                                       
                                        <td class="text-bold-500 d-flex">
                                            <a href="{{ route('product.edit', $item->id) }}"
                                                class="btn icon btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST">
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
