<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Artikel</title>

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
    </ul>


    <h3>Artikel</h3><br>
    <a href="/tambahartikel">Tambah Artikel</a><br>
    <table border="1px">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Tgl Upload</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $post)
                <tr>
                    <td>{{ $post->id_artikel }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->konten }}</td>
                    <td>{{ $post->tgl_upload }}</td>
                    <td>
                        <form method="POST" action="{{ url('/api/hapusartikel/' . $post->id_artikel) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form> |
                        <a href="{{ route('artikel.edit', $post->id_artikel) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
