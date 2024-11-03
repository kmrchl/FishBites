<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Produsen</title>

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
        <li><a href="/artikel">artikel</a></li>
    </ul><br>


    <h3>List Produsen</h3>
    <a href="/tambahprodusen">Tambah Produsen</a><br><br>
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
                        <form method="POST" action="{{ url('/api/hapus/' . $petani->id_produsen) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <a href="{{ route('produsen.edit', $petani->id_produsen) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> <br>


</body>

</html>
