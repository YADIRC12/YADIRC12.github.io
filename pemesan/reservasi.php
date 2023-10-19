<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {

    $getMasId = mysqli_query($koneksi, "SELECT MAX(RIGHT(id_reservasi,4))AS id FROM tb_reservasi");
    $d = mysqli_fetch_object($getMasId);
    $genrateid = 'R' . date('Y') . sprintf("%04s", $d->id + 1);

    $insert = mysqli_query($koneksi, "INSERT INTO tb_reservasi VALUES(
        '" . $genrateid . "',
         '" . $_POST['nama'] . "',
         '" . $_POST['telp'] . "',
         '" . $_POST['tipe_k'] . "',
         '" . $_POST['tgl_in'] . "',
         '" . $_POST['tgl_out'] . "'
         
        )");

    if ($insert) {
        echo '<script>window.location="res.php?id=' . $genrateid . '"</script>';
    } else {
        echo 'data tidak berhasil di teruskan' . mysqli_error($koneksi);
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class=" container-fluid">
            <a class="navbar-brand text-light" href="#">Hotel Ade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="fasilitaspm.html">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="kamar.html">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../config/logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- container start -->
    <div class="container">



        <h1 class="text-light texth2">selamat Datang Di Halaman Reservasi Hotel Ade</h1>

        <div class="wrapper d-flex justify-content-center">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-light">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Telp</label>
                    <input type="text" name="telp" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Tipe Kamar</label>
                    <input type="text" name="tipe_k" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Tanggal Cek-In</label>
                    <input type="date" name="tgl_in" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Tanggal Cek-Out</label>
                    <input type="date" name="tgl_out" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
            </form>

        </div>

    </div>
    <!-- container end -->

    <!-- javascript boostrap start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- javascript boostrap end -->

    <!-- javascript boostrap start -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!-- javascript boostrap end -->

    <!-- javascript boostrap start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
    <!-- javascript boostrap end -->
</body>

</html>