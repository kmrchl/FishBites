<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Home</title>
</head>

<body>

    <h1>Wellcome Admin</h1><br>
    <h3>List Produk</h3><br>

    <a href="/addproduk">tambah Produk</a>
    <table border="1px">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Harga/Kg</th>
                <th>Stok</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($show as $produk)
                <tr>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>
                        <a href="">Hapus</a> |
                        <a href="">Edit</a> |
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <h3>List Produsen</h3><br>
    <a href="/addprodusen">Tambah Produsen</a>
    <table border="1px">
        <thead>
            <tr>
                <th>Produsen</th>
                <th>Lokasi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produsen as $petani)
                <tr>
                    <td>{{ $petani->nama_produsen }}</td>
                    <td>{{ $petani->lokasi }}</td>
                    <td>
                        <a href="">Hapus</a> |
                        <a href="">Edit</a> |
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
