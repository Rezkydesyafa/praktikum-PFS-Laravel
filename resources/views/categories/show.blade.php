<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-dark">Detail Kategori</h2>
    </x-slot>

    <div class="container mt-5 text-white">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">&laquo; Kembali</a>

        <div class="card bg-white">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">Jumlah produk: {{ $category->products->count() }}</p>

                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>