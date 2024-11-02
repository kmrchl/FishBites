<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produsen</title>
</head>

<body>

    <h2>Tambah Produsen Baru</h2>
    <form method="POST" action="/api/addprodusen">
        @csrf
        <label for="nama_produsen">Produsen:</label><br>
        <input type="text" id="nama_produsen" name="nama_produsen" required><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <textarea id="lokasi" name="lokasi" required></textarea><br><br>

        <button type="submit">Tambah Produsen</button>
    </form>

</body>

</html>
