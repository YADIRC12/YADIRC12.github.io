<?php

session_start();
include "../koneksi.php";


?>

<!-- html start -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <title>reservasi | Hotel Ade</title>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Ade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservasi.php">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../config/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- content open -->
    <div class="container">
        <div class="row">
            <div class="col" style="margin-top:5rem;">
                <h2>Reservasi Berhasil</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mt-3">
                <h4>kode reservasi anda adalah <b>
                        <?php echo $_GET['id'] ?>
                    </b> </h4>
                <!-- jangan lupa di edit kata katanya start -->
                <span class="mt-3">
                    Keterangan : <br>
                    1. Setiap Tamu Dilarang Membawa Pulang Fasilitas Yang Ada Di Dalam kamar. <br>
                    2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, inventore. <br>
                    3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatibus?. <br>
                    4. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, possimus accusamus?.
                </span>
                <!-- jangan lupa di edit kata katanya end -->
            </div>
        </div>
        <div class="row">
            <div class="col my-3">
                <a href="cetak.php?id=<?php echo $_GET['id'] ?>" class="btn btn-warning text-light">cetak bukti
                    reservasi</a>
            </div>

        </div>
    </div>
    </div>
    <!-- content close -->

    <!-- footer open -->
    <footer class="bg-light">
        <div class="row">
            <div class="col text-center my-1">
                <p>
                <h3>Create With Love By:</h3> <br>
                ANGGRI APRILIANI:310120012713 <br>
                DONY EKAT VIKTORY:310120012698 <br>
                MUHAMMAD HARIADI:310120012710 <br>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer close -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!-- html end -->