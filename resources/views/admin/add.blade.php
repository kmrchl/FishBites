<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
</head>

<body>

    <h2>Tambah Admin Baru</h2>
    <form method="POST" action="{{ route('admin.store') }}">
        @csrf
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required></input><br><br>

        <label for="password_confirmation">Konfirmasi Password</label><br>
        <input type="password" name="password_confirmation" required> <br><br>

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Tambah Admin</button>
    </form>

</body>

</html>
