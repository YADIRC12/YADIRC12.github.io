<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "hotelade2";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    echo 'error :' . mysqli_connect_error($koneksi);
}

?>