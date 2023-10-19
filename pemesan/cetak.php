<?php
include "../koneksi.php";

if (isset($_GET['id'])) {
    $id_reservasi = $_GET['id'];
    $getReservasi = mysqli_query($koneksi, "SELECT * FROM tb_reservasi WHERE id_reservasi = '$id_reservasi'");
    $reservasi = mysqli_fetch_assoc($getReservasi);
} else {
    echo "ID Reservasi tidak valid.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Reservasi</title>
    <!-- Include your CSS styling here (if needed) -->
</head>

<body>
    <h1 class="neon-text" style="text-align: center;">Bukti Reservasi|Hotel Ade</h1>
    <p>ID Reservasi:
        <?php echo $reservasi['id_reservasi']; ?>
    </p>
    <p>Nama Lengkap:
        <?php echo $reservasi['nama']; ?>
    </p>
    <p>No. Telepon:
        <?php echo $reservasi['telp']; ?>
    </p>
    <p>Tipe Kamar:
        <?php echo $reservasi['tipe_k']; ?>
    </p>
    <p>Tanggal Check-in:
        <?php echo $reservasi['tgl_in']; ?>
    </p>
    <p>Tanggal Check-out:
        <?php echo $reservasi['tgl_out']; ?>
    </p>

    <footer>
        <div class="row">
            <div class="col text-center my-5 text-light blur-navbar">
                <p style="text-align: center;">create by Hotel Ade</p>
            </div>
        </div>
    </footer>

    <!-- Include your additional content here (if needed) -->

    <script>
        // Use JavaScript to trigger the print dialog automatically when the page loads
        window.onload = function () {
            window.print();
        };
    </script>


</body>

</html>