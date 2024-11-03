<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Artikel</title>
</head>

<body>

    <h2>Ubah Artikel</h2>
    <form method="POST" action="{{ route('artikel.update', $artikel->id_artikel) }}">
        @csrf
        @method('PUT')
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}" {{ $artikel->id_admin == $admin->id_admin ? 'selected' : '' }}>
                    {{ $admin->username }}
                </option>
            @endforeach
        </select><br><br>

        <label for="judul">Judul</label><br>
        <input type="text" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}"
            required><br><br>

        <label for="konten">Konten</label><br>
        <textarea id="konten" name="konten" required>{{ old('konten', $artikel->konten) }}</textarea><br><br>

        <label for="tgl_upload">Tanggal Upload</label><br>
        <input type="datetime-local" id="tgl_upload" name="tgl_upload"
            value="{{ old('tgl_upload', $artikel->tgl_upload) }}" required><br><br>


        <button type="submit">Ubah Artikel</button>
    </form>

</body>

</html>
