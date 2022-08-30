<?php
if (isset($_POST['hapus'])) {
    require("koneksi.php");
    $cari = @$_POST['cari_kode'];
    $sql = "delete from barang where kodebrg='$cari' ";
    $hasil = mysqli_query($conn, $sql);
    if ($hasil) {

        echo " 
    <script>
            alert('Data Berhasil dihapus');
            document.location.href='index.php?p=select';
    </script>";
    }
}
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body background="./imagess/nyoba.jpg">
    <div class="w3-margin-top w3-purple w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Hapus Data</div>
    <center>
        <hr>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td><input type="text" name="cari_kode"></td>
                </tr>
            </table>
            <br>
            <input class="w3-button w3-aqua" type="submit" value="Hapus" name="hapus">
        </form>
        <hr>
    </center>
    <br>
    <div class="w3-round w3-purple w3-padding-16 w3-center">Masukan kode barang yang akan di Hapus, kemudian Click Hapus</div>