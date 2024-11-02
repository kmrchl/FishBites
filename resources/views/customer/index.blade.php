<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Customer</title>

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
        <li><a href="/">Produk</a></li>
        <li><a href="/produsen">Produsen</a></li>
        <li><a href="/artikel">Artikel</a></li>
        <li><a href="/faq">FaQ</a></li>
        <li><a href="/artikel">Customer</a></li>
    </ul>


    <h3>Artikel</h3><br>
    <a href="/tambahcust">Tambah Customer</a><br>
    <table border="1px">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Emaail</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Nomor Telp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $cust)
                <tr>
                    <td>{{ $cust->id_customer }}</td>
                    <td>{{ $cust->nama_customer }}</td>
                    <td>{{ $cust->email }}</td>
                    <td>{{ $cust->password }}</td>
                    <td>{{ $cust->alamat }}</td>
                    <td>{{ $cust->no_telp }}</td>
                    <td>
                        <form method="POST" action="{{ url('/api/hapuscust/' . $cust->id_customer) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form> |
                        <a href="{{ route('artikel.edit', $cust->id_customer) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
