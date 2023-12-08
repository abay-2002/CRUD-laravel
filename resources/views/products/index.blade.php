<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <h1>Halaman Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>Produk: {{ $product['name'] }}</li>
            <li>Jumlah: {{ $product['qty'] }}</li>
            <li>Harga :{{ $product['price'] }}</li>
            <li>Deskripsi: {{ $product['description'] }}</li>
        @endforeach 
    </ul>
</body>
</html>