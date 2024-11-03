<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produsen</title>
</head>

<body>

    <h2>Ubah Produsen Baru</h2>
    <form method="POST" action="{{ route('produsen.update', $produsen->id_produsen) }}">
        @csrf
        @method('PUT')
        <label for="nama_produsen">Produsen:</label><br>
        <input type="text" id="nama_produsen" name="nama_produsen"
            value="{{ old('nama_produsen', $produsen->nama_produsen) }}" required><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <textarea id="lokasi" name="lokasi" value="{{ old('lokasi', $produsen->lokasi) }}" required></textarea><br><br>

        <button type="submit">Ubah Produsen</button>
    </form>

</body>

</html>
