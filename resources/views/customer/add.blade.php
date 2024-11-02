<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>

<body>

    <h2>Tambah Customer Baru</h2>
    <form method="POST" action="/api/addprodusen">
        @csrf
        <label for="nama_customer">Nama</label><br>
        <input type="text" id="nama_customer" name="nama_customer" required><br><br>

        <label for="email">email</label><br>
        <textarea id="email" name="email" required></textarea><br><br>

        <button type="submit">Tambah Produsen</button>
    </form>

</body>

</html>
