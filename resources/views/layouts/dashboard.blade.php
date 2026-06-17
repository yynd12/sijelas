<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIJELAS</title>

    @vite(['resources/css/dashboard.css'])

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="logo">
            <img src="{{ asset('images/logo-sijelas.png') }}">
        </div>

        <ul>

            <li>
                <a href="#">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>

            @yield('menu')

        </ul>

    </aside>

    <!-- Main -->

    <div class="main">

        <header>

            <div class="left-header">

                <span>
                    Welcome, {{ Auth::user()->username }}!
                </span>

            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="logout">
                    LOG OUT
                </button>
            </form>

        </header>

        <section class="content">

            @yield('content')

        </section>

    </div>

</div>

</body>
</html>