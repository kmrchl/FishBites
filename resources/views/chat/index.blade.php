<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin : Chat</title>

    <style>
        .horizontal-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .horizontal-list li {
            margin-right: 20px;
        }

        .horizontal-list li:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body>

    <h1>Wellcome Admin</h1><br>

    <ul class="horizontal-list">
        <li><a href="#">Produk</a></li>
        <li><a href="/produsen">Produsen</a></li>
        <li><a href="/artikel">artikel</a></li>
        <li><a href="/faq">FaQ</a></li>
        <li><a href="/customer">Customer</a></li>
        <li><a href="/chat">Chatbox</a></li>
    </ul><br><br>

    <h2>Daftar Chatbox</h2>
    <ul>
        @foreach ($customers as $customer)
            <li>
                <a href="{{ route('chat.show', $customer->id_customer) }}">{{ $customer->nama_customer }}</a>
            </li>
        @endforeach
    </ul>

</body>

</html>
