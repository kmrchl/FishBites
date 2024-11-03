<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah FaQ</title>
</head>

<body>

    <h2>Tambah FaQ Baru</h2>
    <form method="POST" action="{{ route('faq.store') }}">
        @csrf

        <label for="id_admin">Admin:</label>
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
            @endforeach
        </select><br><br>

        <label for="pertanyaan">Pertanyaan</label><br>
        <input type="text" id="pertanyaan" name="pertanyaan" required><br><br>

        <label for="jawaban">Jawaban</label><br>
        <textarea id="jawaban" maxlength="65535" name="jawaban" required></textarea><br><br>

        <button type="submit">Tambah FaQ</button>
    </form>

</body>

</html>
