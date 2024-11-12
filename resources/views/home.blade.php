<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Home</title>

    <style>
        .horizontal-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .horizontal-list li {
            margin-right: 20px;
        }

        .horizontal-list li:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body>

    <h1>Wellcome Admin</h1><br>

    <ul class="horizontal-list">
        <li><a href="#">Produk</a></li>
        <li><a href="/produsen">Produsen</a></li>
        <li><a href="/artikel">artikel</a></li>
        <li><a href="/faq">FaQ</a></li>
        <li><a href="/customer">Customer</a></li>
        <li><a href="/chat">Customer</a></li>
    </ul>

    <h3>List Produk</h3><br>

    <a href="{{ route('produk.add') }}">tambah Produk</a>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gambar</th>
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
                    <td><img src="{{ asset('storage/images/' . $produk->gambar) }}" alt="Gambar Produk"></td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>
                        <form method="POST" action="{{ url('/api/hapusproduk/' . $produk->id_produk) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form> |
                        <a href="{{ route('produk.edit', $produk->id_produk) }}">Edit</a> |
                        <a href="">Ulasan</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</body>

</html>
