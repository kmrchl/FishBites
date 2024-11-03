<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produsen</title>
</head>

<body>

    <h2>Tambah Produk Baru</h2>
    <form method="POST" action="{{ route('produk.store') }}">
        @csrf
        <label for="id_admin">Pilih Admin:</label>
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
            @endforeach
        </select><br><br>

        <label for="id_produsen">Pilih Produsen:</label>
        <select name="id_produsen" id="id_produsen" required>
            @foreach ($producers as $produsen)
                <option value="{{ $produsen->id_produsen }}">{{ $produsen->nama_produsen }}</option>
            @endforeach
        </select><br><br>

        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" id="nama_produk" name="nama_produk" required><br><br>

        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" id="deskripsi" name="deskripsi" required><br><br>

        <label for="harga">Harga/Kg</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="stok">Stok/Kg</label><br>
        <input type="number" id="stok" name="stok" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>

</body>

</html>
