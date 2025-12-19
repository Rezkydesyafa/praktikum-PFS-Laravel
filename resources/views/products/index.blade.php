@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Produk</h5>
        <div> 
            @role('admin')
            <a href="{{ route('products.create') }}" class="btn btn-light btn-sm text-primary fw-bold">
                Tambah Produk
            </a>
            @endrole
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="80">#</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th width="150">Harga</th>
                        <th width="150">Kategori</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="fw-bold">{{ $product->name }}</td>
                        <td>{{ $product->description ?? '-' }}</td>
                        <td class="text-end">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            <span class="badge bg-info text-dark">{{ $product->category->name }}</span>
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm text-white">
                                Lihat
                            </a>
                            @role('admin')
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                            @endrole
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            <em>Data produk tidak tersedia.</em>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

