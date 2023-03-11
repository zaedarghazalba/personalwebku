<!DOCTYPE html>
<html>

<head>
    <title>Personal Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<main>

    <body class="halaman-utama">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand"><img style="width: 110px;" src="{{ asset('img/zeee.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="ZaedarAlba"><img style="width: 100px;" src="{{ asset('img/home.png') }}"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="TentangSaya"><img style="width: 85px;margin-top: 10px;" src="{{ asset('img/tentang.png') }}"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PortoSaya"><img style="width: 140px;margin-top: 10px;" src="{{ asset('img/porto.png') }}"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Kontak"><img style="width: 110px;margin-top: 6px;" src="{{ asset('img/kontak.png') }}"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center mt-5">

                    <h1 class="display-4" style="font-size: 76px;">Hello World . . .</h1>
                    <p class="lead" style="font-size: 34px;">My name is Zaedar, a student who loves programming</p>

                </div>
            </div>
        </div>
        <section style="padding-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2 style="margin-top: 20px;">Kontak</h2>
                        <p>Silakan hubungi saya melalui:</p>
                        <div class="contact-links">
                            <a href="Kontak"><img src="{{ asset('img/email.png') }}" alt="Email"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer style="text-align: center;margin-top: 20px;">
            <p>&copy; 2023 by ZAEDAR GHAZALBA</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>

</html>