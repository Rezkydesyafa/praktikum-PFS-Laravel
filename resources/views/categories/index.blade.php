@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<div class="card">
    <div class="card-header bg-white text-dark d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Kategori</h5>
        <div>
            @role('admin')
            <a href="{{ route('categories.create') }}" class="btn btn-info  btn-sm text-primary fw-bold">
                Tambah Kategori
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
                        <th>Nama Kategori</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm text-white">
                                Lihat
                            </a>
                            @role('admin')
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
                        <td colspan="3" class="text-center text-muted">
                            <em>Data kategori tidak tersedia.</em>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

