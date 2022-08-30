<?php

include 'koneksi.php';
$kdd = $_GET['kdd'];
$sql = "delete from penjualan where kodebrg='$kdd' ";
$hasil = mysqli_query($conn, $sql);

if ($hasil) {

    echo " 
    <script>
            alert('Data Berhasil dihapus');
            document.location.href='index.php?p=penjualan';
    </script>";
}
?>