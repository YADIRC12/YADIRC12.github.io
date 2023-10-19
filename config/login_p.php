<?php

session_start();

include "../koneksi.php";

$username = $_POST["username"];
$p = $_POST["password"];


$sql = "SELECT * FROM tb_pemesan WHERE username ='" . $username . "' and password ='" . $p . "' limit 1 ";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);
if ($jumlah > 0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["id_pemesan"] = $row["id_pemesan"];
    $_SESSION["nama"] = $row["nama"];
    $_SESSION["telp"] = $row["telp"];
    $_SESSION["username"] = $row["username"];

    header('location:../pemesan/dashboard.php');
} else {
    echo 'window.location="../index.html"';
}

?>