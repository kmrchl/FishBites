<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah FaQ</title>
</head>

<body>

    <h2>Ubah Faq</h2>
    <form method="POST" action="{{ route('faq.update', $faq->id_faq) }}">
        @csrf
        @method('PUT')
        <select name="id_admin" id="id_admin" required>
            @foreach ($admins as $admin)
                <option value="{{ $admin->id_admin }}" {{ $faq->id_admin == $admin->id_admin ? 'selected' : '' }}>
                    {{ $admin->username }}
                </option>
            @endforeach
        </select><br><br>

        <label for="pertanyaan">pertanyaan</label><br>
        <input type="text" id="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}"
            required><br><br>

        <label for="jawaban">Jawaban</label><br>
        <textarea id="jawaban" name="jawaban" required>{{ old('jawaban', $faq->jawaban) }}</textarea><br><br>


        <button type="submit">Ubah FaQ</button>
    </form>

</body>

</html>
