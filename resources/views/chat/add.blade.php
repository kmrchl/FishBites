<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Baru</title>
</head>

<body>

    <h2>Tambah Chat Baru</h2>
    <form method="POST" action="{{ route('chat.send') }}">
        @csrf
        <label for="id_admin">Pilih Admin:</label>
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
            @endforeach
        </select><br><br>

        <label for="id_customer">Pilih Produsen:</label>
        <select name="id_customer" id="id_customer" required>
            @foreach ($customer as $cust)
                <option value="{{ $cust->id_customer }}">{{ $cust->nama_customer }}</option>
            @endforeach
        </select><br><br>

        <label for="pesan">Pesan</label><br>
        <input type="text" id="pesan" name="pesan" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>

</body>

</html>
