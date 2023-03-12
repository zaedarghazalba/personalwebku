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
            <p style="text-align: center;">Saya adalah seorang yang berumur 20 tahun dan berasal dari kota Tarakan, Provinsi Kalimantan Utara. Saat ini, saya sedang menempuh pendidikan di Universitas Teknologi Yogyakarta dan tinggal di daerah Sleman. Saya memiliki minat yang besar dalam bidang teknologi dan senang mengikuti perkembangan terbaru di dunia teknologi.</p>
            <a href="https://goo.gl/maps/h8nAdY5UZxrmcuua9" class="btn btn-primary btn-lg">Lihat Lokasi</a>
        </section>
        <section style="margin-bottom: 100px;">
            <h2 style="text-align: center;">Portofolio</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="border:none;">
                        <img class="card-img-top" src="{{ asset('img/code.png') }}" alt="Card image cap">
                        <div class=" card-body">
                            <h5 style="margin-top: 20px;text-align: center;" class="card-title">Programming</h5>
                            <p class="card-text">Saya sangat tertarik dengan programming dan coding, serta sedang belajar bahasa pemrograman Kotlin, PHP, dan Python. Impian saya adalah menjadi seorang web developer dan android developer yang handal dan terampil. Saya yakin bahwa dengan konsistensi dalam belajar dan berlatih, serta mengikuti perkembangan teknologi terbaru, saya akan mampu mencapai tujuan saya tersebut. Saya sangat antusias dan bersemangat dalam mengejar mimpi saya menjadi seorang developer yang sukses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="border:none;">
                        <img class="card-img-top" src="{{ asset('img/game.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 style="margin-top: 20px;text-align: center;" class="card-title">Gaming</h5>
                            <p class="card-text">Saya sangat suka bermain game sebagai hiburan bersama teman-teman. Jika Anda juga tertarik, kita bisa bermain bersama dan saling menantang di waktu luang kita. Bagi saya, bermain game bukan hanya menghilangkan stres dan lelah dari rutinitas sehari-hari, tapi juga meningkatkan kerja tim dan komunikasi dalam sebuah tim. Saya akan senang jika bisa bermain game bersama dengan Anda suatu hari nanti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="border:none;">
                        <img class="card-img-top" src="{{ asset('img/mediaplayer.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 style="margin-top: 20px;text-align: center;" class="card-title">Movie And Music</h5>
                            <p class="card-text">Saya sangat menyukai menonton film dan mendengarkan musik. Kegiatan ini membuat saya merasa tenang dan santai. Saat sedang fokus belajar dan coding, saya sering mendengarkan musik sebagai pengiring. Jika kamu memiliki kesukaan yang sama, ayo kita bisa berbagi rekomendasi film dan lagu yang bagus untuk ditonton dan didengarkan bersama!



                            </p>
                        </div>
                    </div>
                </div>
            </div>
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