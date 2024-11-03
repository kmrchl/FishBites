<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>

<body>

    <h2>Tambah Customer Baru</h2>
    <form method="POST" action="{{ route('cust.store') }}">
        @csrf
        <label for="nama_customer">Nama</label><br>
        <input type="text" id="nama_customer" name="nama_customer" required><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required></input><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required></input><br><br>

        <label for="password_confirmation">Konfirmasi Password</label><br>
        <input type="password" name="password_confirmation" required> <br><br>

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="alamat">Alamat</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="no_telp">Nomor Telepon</label><br>
        <input type="integer" id="no_telp" name="no_telp" required></input><br><br>

        <button type="submit">Tambah Customer</button>
    </form>

</body>

</html>
