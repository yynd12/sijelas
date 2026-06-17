<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        /* Navbar */
        .navbar{
            background:#33A9C8;
            height:60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 20px;
            color:white;
        }

        .navbar-left{
            display:flex;
            align-items:center;
            gap:15px;
        }

       .logo{
    display:flex;
    align-items:center;
}

.logo img{
    height:100px;
    width:auto;
}


        .burger{
            cursor:pointer;
            font-size:22px;
            border:none;
            background:none;
            color:white;
        }

        .logout{
            color:white;
            text-decoration:none;
            font-weight:bold;
        }

        /* Layout */
        .wrapper{
            display:flex;
        }

        /* Sidebar */
        .sidebar{
            width:220px;
            min-height:100vh;
            background:#55B8D5;
            transition:.3s;
        }

        .sidebar.hide{
            width:0;
            overflow:hidden;
        }

        .sidebar ul{
            list-style:none;
        }

        .sidebar ul li a{
            display:block;
            padding:15px;
            text-decoration:none;
            color:black;
        }

        .sidebar ul li a:hover{
            background:white;
        }

        /* Content */
        .content{
            flex:1;
            padding:20px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:15px;
            box-shadow:0 2px 5px rgba(0,0,0,.1);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th{
            background:#4CB6D6;
            color:white;
            padding:10px;
        }

        td{
            padding:10px;
            border-bottom:1px solid #ddd;
        }

        .btn{
            border:none;
            padding:5px 10px;
            border-radius:5px;
            color:white;
            cursor:pointer;
        }

        .btn-edit{
            background:#0d6efd;
        }

        .btn-detail{
            background:#198754;
        }

        .btn-hapus{
            background:#dc3545;
        }

        th:last-child,
td:last-child{
    width:250px;
    text-align:center;
}

.aksi{
    text-align:center;
    white-space:nowrap;
}
    </style>
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
            <button class="burger" onclick="toggleSidebar()">☰</button>

            
        <div class="logo">
            <img src="{{ asset('images/logo-sijelas.png') }}">
        </div>


            <span>Welcome, SuperAdmin009!</span>
        </div>

        <a href="#" class="logout">LOG OUT</a>
    </div>

    <div class="wrapper">

        <div class="sidebar" id="sidebar">
            <ul>
                <li>
                    <a href="/dashboard">
                        🏠 Dashboard
                    </a>
                </li>

                <li>
                    <a href="/management-pengguna">
                        👤 Manajemen Pengguna
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            @yield('content')
        </div>

    </div>

    <script>
        function toggleSidebar(){
            document
                .getElementById('sidebar')
                .classList.toggle('hide');
        }
    </script>

</body>
</html>