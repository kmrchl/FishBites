<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
</head>

<body>

    <h2>Tambah Artikel Baru</h2>
    <form method="POST" action="/artikel/add">
        @csrf

        <label for="id_admin">Admin:</label>
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
            @endforeach
        </select><br><br>

        <label for="judul">Judul</label><br>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="konten">Konten:</label><br>
        <textarea id="konten" name="konten" required></textarea><br><br>

        <label for="tgl_upload">Tanggal Upload</label><br>
        <input type="datetime-local" name="tgl_upload" id="tgl_upload" required><br><br>

        <button type="submit">Tambah Artikel</button>
    </form>

</body>

</html>
