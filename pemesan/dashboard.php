<?php

session_start();
include "../koneksi.php";

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                        <a class="nav-link active text-light" aria-current="page" href="dashboard.php"
                            style="font-family: 'Satisfy', cursive;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="fasilitaspm.html"
                            style="font-family: 'Satisfy', cursive;">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="reservasi.php"
                            style="font-family: 'Satisfy', cursive;">reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="kamar.html"
                            style="font-family: 'Satisfy', cursive;">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../config/logout.php"
                            style="font-family: 'Satisfy', cursive;">Log Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- container start -->
    <div class="container2">

        <h4 class="text-light texth2" style="font-family: 'Satisfy', cursive;">Halo |
            <?php echo $_SESSION['nama'] ?>
        </h4>

        <p class="text-light texth2" style="font-family: 'Satisfy', cursive;">selamat Datang Di Halaman Dashboard Hotel
            Ade</p>


        <div class="wrapper d-flex justify-content-center">

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