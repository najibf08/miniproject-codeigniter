<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
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
        padding: 20px;
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

    .table-container {
        margin-top: 80px;
        /* Membuat ruang antara navbar dan tabel */
        padding: 20px;
    }

    ul {
        list-style-type: none;
    }

    body {
        background-color: white;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <span class="openbtn" onclick="openNav()">&#9776;</span>
        <h3 class="text-center text-white">Data Guru</h3>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
        <li>
            <a href="<?php echo base_url('admin') ?>" <span class="ml-3">Dashboard</span>
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

    <div class="content">
        <div class="container table-container">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>NISN</th>
                        <th>Gender</th>
                        <th>Mapel</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;
                                foreach ($guru as $row):
                                    $no++ ?>
                    <tr>
                        <td>
                            <?php echo $no ?>
                        </td>
                        <td>
                            <?php echo $row->nama_guru ?>
                        </td>
                        <td>
                            <?php echo $row->nisn ?>
                        </td>
                        <td>
                            <?php echo $row->gender ?>
                        </td>
                        <td>
                            <?php echo tampil_full_mapel_byid($row->id_mapel) ?>

                        </td>

                        <td class="text-center">
                            <a href="<?php echo base_url('admin/ubah_guru/').$row->id_guru?>"
                                class="btn btn-primary btn-sm">Ubah</a>
                            <button onclick="hapus(<?php echo $row->id_guru ?>)"
                                class="btn btn-danger btn-sm">Hapus</button>
                        </td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </table>
            <button class="btn btn-sm btn-warning"><a href="Tambah_guru" class="btn text-primary">Tambah</a>
            </button>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
            function hapus(id) {
                Swal.fire({
                    title: 'Yakin DI Hapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo base_url('admin/hapus_guru/') ?>" + id;
                    }
                });
            }
            </script>

            <?php if($this->session->flashdata('success')): ?>
            <script>
            Swal.fire({
                icon: 'success',
                title: '<?=$this->session->flashdata('success')?>',
                showConfirmButton: false,
                timer: 1500
            });
            </script>
            <?php endif; ?>

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