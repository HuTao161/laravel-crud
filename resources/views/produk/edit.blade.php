<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
</head>
<body>

    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $produk->nama }}" required>
        <textarea name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
        <input type="number" name="harga" value="{{ $produk->harga }}" required>
        <input type="number" name="stok" value="{{ $produk->stok }}" required>
        <button type="submit">Update</button>
    </form>

</body>
</html>
