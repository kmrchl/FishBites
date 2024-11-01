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

    <a href="{{ route('produk.add') }}">tambah Produk</a>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
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
                    <td>{{ $produk->id_produk }}</td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>
                        <form method="POST" action="{{ url('/hapusproduk/' . $produk->id_produk) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form> |
                        <a href="{{ route('produk.edit', $produk->id_produk) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <h3>List Produsen</h3><br>
    <a href="/tambahprodusen">Tambah Produsen</a>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produsen</th>
                <th>Lokasi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produsen as $petani)
                <tr>
                    <td>{{ $petani->id_produsen }}</td>
                    <td>{{ $petani->nama_produsen }}</td>
                    <td>{{ $petani->lokasi }}</td>
                    <td>
                        {{-- <a href="/hapus">Hapus</a> --}}
                        <form method="POST" action="{{ url('/hapus/' . $petani->id_produsen) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <a href="{{ route('produsen.edit', $petani->id_produsen) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
