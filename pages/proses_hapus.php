<?php

include 'koneksi.php';
$KD = $_GET['KD'];
$sql = "delete from barang where kodebrg='$KD' ";
$hasil = mysqli_query($conn, $sql);

if ($hasil) {

    echo " 
    <script>
            alert('Data Berhasil dihapus');
            document.location.href='index.php?p=select';
    </script>";
}
?>