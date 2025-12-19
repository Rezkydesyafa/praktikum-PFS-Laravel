<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-dark mb-lg-4">Detail produk</h2>
        </x-slot>
        <div class="container mt-5">

    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">&laquo; Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Kategori: {{ $product->category?->name }}</h6>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>

            @role('admin')
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            @endrole
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>