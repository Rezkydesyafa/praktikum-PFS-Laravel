<!DOCTYPE html>
<html>
<head>
    <title>Delete Test</title>
</head>
<body>
    <h1>Test Delete Form</h1>
    
    <form action="/products/1" method="POST" onsubmit="return confirm('Yakin hapus?');">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Product 1</button>
    </form>
    
    <hr>
    
    <h2>Products Count: {{ App\Models\Product::count() }}</h2>
</body>
</html>
