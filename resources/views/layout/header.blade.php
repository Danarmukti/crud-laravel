<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Peminjaman Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    --}}
</head>

<body>

    <div class="container">
        <h1>manajemen peminjaman Buku</h1>
        @if (Auth::check())
            <div>
                <p style="padding: 10px 0px">Anda masuk sebagai Admin, Halo <strong> {{ Auth::user()->name }} </strong></p>
                <form action="{{ route('logout') }}" method="POST" style="margin-bottom: 10px">
                    @csrf
                    <button type="submit" class="tombol">Logout</button>
                </form>
            </div>
        @endif
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">Penerbit</a></li>
                <li><a href="/buku">Buku</a></li>
            </ul>
        </div>