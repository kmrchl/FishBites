<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Roomchat</title>
</head>

<body>

    <h2>Chat dengan {{ $customer->nama_customer }}</h2>

    <div>
        @foreach ($chats as $chat)
            <p><strong>{{ $chat->id_admin ? 'Admin' : 'Customer' }}:</strong> {{ $chat->pesan }}</p>
        @endforeach
    </div>

    <form action="{{ route('chat.store', $customer->id_customer) }}" method="POST">
        @csrf
        <input type="hidden" name="id_customer" value="{{ $customer->id_customer }}">
        <input type="hidden" name="id_admin" value="{{ $lastAdminId }}">
        <textarea name="pesan" placeholder="Tulis pesan..."></textarea>
        <button type="submit">Kirim</button>
    </form><br><br>

    <a href="{{ url('/chat') }}">Kembali</a>

</body>

</html>
