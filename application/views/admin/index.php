<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card {
        background-color: #20B2AA;
        border: 1px solid #ccc;
        border-radius: 2px;
        padding: 10px;
        margin: 5px;
        width: 200px;
        display: inline-block;
        color: white;
        margin-left: 0;
        transition: margin-left 0.5s;
    }


    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .login-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008B8B;
        color: #fff;
        text-decoration: none;
        text-align: center;
        font-size: 15px;
        border: none;
        width: 100px;
    }


    .navbar {
        background-color: #333;
        color: #fff;
        padding: 10px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    /* CSS Untuk Side Navbar (Samping) */
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 2;
        top: 0;
        left: 0;
        background-color: #333;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 5px 10px;
        text-decoration: none;
        font-size: 18px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        background-color: #555;
    }

    /* CSS Untuk Konten */
    .content {
        margin-left: 0;
        padding: 60px;
        transition: margin-left 0.5s;
    }

    /* CSS Umum */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Tombol untuk membuka side navbar */
    .openbtn {
        background-color: #333;
        color: #fff;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        margin-left: 0;
        transition: margin-left 0.5s;
    }

    .openbtn:hover {
        background-color: #555;
    }

    .search-container {
        float: right;
    }

    .search-box {
        padding: 2px;
        border: none;
        border-radius: 5px;
    }

    .navbar h1 {
        margin: 0;
    }

    body {
        background-color: white;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <span class="openbtn" onclick="openNav()">&#9776;</span>
        <h3 class="text-center text-white">Dashboard</h3>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- Side Navbar (Samping) -->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>

        <li>
            <a href="<?php echo base_url('admin') ?>" <span class="ml-3">Sekolah</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('admin/siswa') ?>" <span class="flex-1 ml-3 whitespace-nowrap">Daftar
                Siswa</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('admin/guru') ?>" <span class="flex-1 ml-3 whitespace-nowrap">Daftar
                Guru</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('login/logout'); ?>" <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
            </a>
        </li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="content">

        <div class="card">
            <p>Jumlah Kelas</p>
            <h2>6 </h2>
            <a href="" target="_blank" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah Mapel</p>
            <h2>9</h2>
            <a href="" target="_blank" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah Siswa</p>
            <h2>4</h2>
            <a href="" target="_blank" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah guru</p>
            <h2>10</h2>
            <a href="" target="_blank" class="login-button">Lihat Detail</a>
        </div>

    </div>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementsByClassName("content")[0].style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementsByClassName("content")[0].style.marginLeft = "0";
    }
    </script>
    </div>

</body>

</html>