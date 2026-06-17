<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

body {
  display: flex;
  background: #f4f4f4;
}

/* SIDEBAR */
.sidebar {
  width: 220px;
  height: 100vh;
  background: #2f8fa3;
  color: white;
  padding: 20px;
}

.sidebar h2 {
  margin-bottom: 30px;
}

.sidebar a {
  display: block;
  margin: 10px 0;
  color: white;
  text-decoration: none;
}

/* MAIN */
.main {
  flex: 1;
}

/* NAVBAR */
.navbar {
  background: #3fb3c8;
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  color: white;
}

/* CONTENT */
.content {
  padding: 20px;
}

/* CARD */
.card {
  background: white;
  border-radius: 10px;
  padding: 20px;
}

/* TABLE */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table th, table td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

table th {
  background: #eaeaea;
}

/* BUTTON */
.btn {
  padding: 5px 10px;
  border: none;
  color: white;
  border-radius: 5px;
}

.btn-edit { background: green; }
.btn-hapus { background: red; }
.btn-detail { background: blue; }

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>SIJELS</h2>
  <a href="/management-pengguna">Management Pengguna</a>
</div>

<div class="main">

  <!-- NAVBAR -->
  <div class="navbar">
    <div>Welcome, SuperAdmin</div>
    <div>LOG OUT</div>
  </div>

  <!-- CONTENT -->
  <div class="content">
    @yield('content')
  </div>

</div>

</body>
</html>