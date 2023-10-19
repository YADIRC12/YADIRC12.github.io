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
            <a class="navbar-brand text-light" href="#">HOTEL ADE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../fasilitas.html">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../reviewkamar.html">Review Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../index.html">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- container start -->
    <div class="container2">

        <h3 class="texth2 text-light">Selamat Datang Di Hotel Ade</h3>
        <div class="wrapper">
            <img src="img/HDLogo.jpg" alt="" class="logohotel">
            <h4 class="textlogin text-light">Silahkan Login Terlebih Dahulu:</h4>
        </div>
        <div class="login mx-auto">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-light">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Username" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Telp</label>
                    <input type="text" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Username</label>
                    <input type="text" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-light">Password</label>
                    <input type="text" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
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