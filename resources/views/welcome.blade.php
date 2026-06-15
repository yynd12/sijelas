<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJELAS</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Georgia, serif;
            background:#111;
        }

        .navbar{
            background:#2CA8D2;
            height:70px;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:0 40px;
        }

        .logo{
            color:white;
            font-size:32px;
            font-weight:bold;
        }

        .login{
            color:white;
            text-decoration:none;
            font-size:18px;
        }

        .hero{
            height:calc(100vh - 70px);

            background:
            linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)),
            url('https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200');

            background-size:cover;
            background-position:center;

            display:flex;
            align-items:center;
            justify-content:center;

            gap:80px;
            padding:50px;
        }

        .hero-left img{
            width:320px;
        }

        .hero-right{
            color:white;
            max-width:500px;
        }

        .hero-right h1{
            font-size:60px;
            margin-bottom:20px;
        }

        .subtitle{
            font-size:13px;
            margin-bottom:25px;
            opacity:.8;
        }

        .hero-right p{
            line-height:1.8;
            font-size:22px;
        }

        @media(max-width:768px){

            .hero{
                flex-direction:column;
                text-align:center;
            }

            .hero-right h1{
                font-size:40px;
            }

            .hero-right p{
                font-size:18px;
            }

            .hero-left img{
                width:220px;
            }
        }

    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">SIJELAS</div>

        <a href="/login" class="login">
            LOGIN
        </a>
    </nav>

    <section class="hero">

        <div class="hero-left">

            {{-- Ganti dengan logo sekolah --}}
            <img src="{{ asset('images/logosijelas.png') }}">

        </div>

        <div class="hero-right">

            <h1>SIJELAS</h1>

            <div class="subtitle">
                SISTEM MANAJEMEN KELAS SMK NEGERI 1 KOTA BEKASI
            </div>

            <p>
                Sistem berbasis digital untuk mengelola aktivitas kelas
                secara terstruktur, mencakup pencatatan uang kas,
                pengelolaan tugas, serta monitoring kegiatan tadarus
                dalam satu platform yang terintegrasi dan mudah digunakan.
            </p>

        </div>

    </section>

</body>
</html>