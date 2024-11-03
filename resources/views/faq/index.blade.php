<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : FaQ</title>

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
        <li><a href="/faq">FaQ</a></li>
        <li><a href="/customer">Customer</a></li>
    </ul>


    <h3>FaQ</h3><br>
    <a href="/tambahfaq">Tambah FaQ</a><br>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
                <th>Tgl Upload</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faq as $question)
                <tr>
                    <td>{{ $question->id_faq }}</td>
                    <td>{{ $question->pertanyaan }}</td>
                    <td>{{ $question->jawaban }}</td>
                    <td>{{ $question->timestamp }}</td>
                    <td>
                        <form method="POST" action="{{ url('/api/hapusfaq/' . $question->id_faq) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form> |
                        <a href="{{ route('faq.edit', $question->id_faq) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
