<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
</head>

<body>

    <h2>Ubah Produk</h2>
    <form method="POST" action="{{ route('produk.update', $produk->id_produk) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}" {{ $produk->id_admin == $admin->id_admin ? 'selected' : '' }}>
                    {{ $admin->username }}
                </option>
            @endforeach
        </select><br><br>

        <select name="id_produsen" id="id_produsen" required>
            @foreach ($produsens as $produsen)
                <option value="{{ $produsen->id_produsen }}"
                    {{ $produk->id_produsen == $produsen->id_produsen ? 'selected' : '' }}>
                    {{ $produsen->nama_produsen }}
                </option>
            @endforeach
        </select><br><br>

        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}"
            required><br><br>

        <label for="gambar">Gambar</label><br>
        <input type="file" id="gambar" name="gambar" value="{{ old('gambar', $produk->gambar) }}" required>
        <div class="form-group">
            @if ($produk->gambar)
                <br>
                <img src="{{ Storage::url($produk->gambar) }}" alt="Gambar Produk" style="width: 100px; height: auto;">
            @endif
        </div><br>

        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}"
            required><br><br>

        <label for="harga">Harga/Kg</label><br>
        <input type="number" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}"
            required><br><br>

        <label for="stok">Stok/Kg</label><br>
        <input type="number" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required><br><br>

        <button type="submit">Ubah Produsen</button>
    </form>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


</body>

</html>
