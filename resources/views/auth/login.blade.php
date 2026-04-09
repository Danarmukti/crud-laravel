<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Aplikasi Peminjaman Barang</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>
    <div class="container" style="max-width: 400px">
        <form action="{{ route('loginProses') }}" method="POST" class="form-group">
            @csrf
            <h2>Form Login</h2>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="tombol">Login</button>
        </form>
    </div>
</body>

</html>