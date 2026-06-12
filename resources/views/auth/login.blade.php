<!DOCTYPE html>
<html>
<head>
    <title>Login SIJELAS</title>
</head>
<body>

    <h2>Login SIJELAS</h2>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <br>

        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <br>

        <button type="submit">Login</button>

    </form>

</body>
</html>