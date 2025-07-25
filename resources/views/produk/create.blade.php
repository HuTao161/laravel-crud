<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk Baru</title>
</head>
<body>

    <h1>Tambah Produk Baru</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama Produk" required>
        <textarea name="deskripsi" placeholder="Deskripsi Produk" required></textarea>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>
