<!DOCTYPE html>
<html>

<head>
    <title>Personal Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <style>
        label,
        input {
            display: block;
            margin: auto;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            display: block;
            width: 50%;
            margin: auto;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <header>
        @if (Session::has('message_sent'))
        <script>
            swal("Message", "{{ Session::get('message_sent') }}", 'success', {
                button: "Ok",
                timer: 3000,
                dangerMode: true,
            });
        </script>
        @endif
        @if(session('message_sent'))
        <div class="alert alert-success">
            {{ session('message_sent') }}
        </div>
        @endif

        @if(session('message_failed'))
        <div class="alert alert-danger">
            {{ session('message_failed') }}
        </div>
        @endif
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
    <form method="post" action="{{ route('send.email') }}">
        @csrf
        <label for="name"></label>
        <input type="text" name="name" id="name" required placeholder="Masukkan Nama Lengkap Anda">

        <label for="email"></label>
        <input type="email" name="email" id="email" required placeholder="Masukkan Email Anda">

        <label for="subject"></label>
        <input type="text" name="subject" id="subject" required placeholder="Masukkan Subject Anda">

        <label for="message"></label>
        <textarea name="message" id="message" required placeholder="Masukkan Pesan Anda"></textarea>

        <input type="submit" value="Send">
    </form>


    <footer style="text-align: center;margin-top: 20px;">
        <p>&copy; 2023 by ZAEDAR GHAZALBA</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>


</html>