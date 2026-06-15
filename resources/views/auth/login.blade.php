<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIJELAS</title>

    @vite(['resources/css/app.css', 'resources/css/login.css'])
</head>
<body>

    <header class="navbar">
        <img src="{{ asset('images/logo-sijelas.png') }}" alt="Belum ada potonya woi">
    </header>

    <main class="login-section">

        <div class="overlay"></div>

        <div class="login-card">

            <h1>LOGIN</h1>

            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <input
                    type="text"
                    name="username"
                    placeholder="NAMA"
                >

                <input
                    type="password"
                    name="password"
                    placeholder="PASSWORD"
                >

                <select name="role">
                    <option selected disabled>MASUK SEBAGAI</option>
                    <option value="siswa">Siswa</option>
                    <option value="wali_kelas">Wali Kelas</option>
                </select>

                <button type="submit">
                    LOGIN
                </button>

            </form>

        </div>

    </main>

</body>
</html>