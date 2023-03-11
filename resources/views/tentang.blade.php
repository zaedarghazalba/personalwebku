<!DOCTYPE html>
<html>

<head>
    <title>Personal Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
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
    <main>
        <section>
            <h2 style="text-align: center;">Tentang Saya</h2>
            <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec eleifend pulvinar aliquam. Morbi varius felis vitae dui malesuada, a aliquam nisl pretium. Nam ut massa eget nisl fermentum bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed feugiat augue sit amet massa feugiat aliquam. Phasellus ut dictum tortor. Sed euismod leo in blandit lobortis. Integer lobortis nisi quis tempor efficitur.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, libero ut faucibus eleifend, magna dui finibus nulla, vitae faucibus magna ex ac turpis. Vestibulum sed velit vel velit pellentesque eleifend. Integer viverra enim a ex euismod, ut pharetra eros rhoncus. In finibus libero eu ligula molestie efficitur. Ut quis commodo massa, id pretium risus. Duis suscipit metus quis diam blandit aliquam. Aenean sit amet ante metus. Nunc commodo tristique metus sed pulvinar. Quisque consectetur enim vel commodo viverra. Sed condimentum nibh vel enim commodo suscipit.</p>
        </section>
    </main>
    <footer style="text-align: center;margin-top: 20px;">
        <p>&copy; 2023 by ZAEDAR GHAZALBA</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>