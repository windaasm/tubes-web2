<?php
include "koneksi.php";
$kode = $_GET['k'];
$sql = "select * from barang where kodebrg='$kode' ";
$hasil = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($hasil);

if (isset($_POST['edit'])) {

    $kode = $_POST['kode_produk'];
    $namabrg = $_POST['namaB'];
    $hargabrg = $_POST['hargaB'];
    $stokbrg = $_POST['stokB'];

    $sql = "UPDATE barang SET namabarang='$namabrg',harga='$hargabrg',stok='$stokbrg'
            WHERE kodebrg='$kode' ";
    $p = mysqli_query($conn, $sql);

    if ($p) {
        echo " 
                    <script>
                            alert('data berhasil di edit');
                            document.location.href='index.php?p=select';
                    </script>";
    } else {
        echo " 
                    <script>
                            alert('data gagal di edit');
                            document.location.href='index.php?p=form_edit';
                    </script>";
    }
}

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body background="./imagess/nyoba.jpg">

    <div class="w3-margin-top w3-teal w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Form Edit</div>
    <center>



        <form action="" method="post">
            <table border=0>
                <input type="hidden" name="kode_produk" value="<?= $row['kodebrg']; ?>">
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="namaB" value="<?= $row['namabarang']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="hargaB" value="<?= $row['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>stok</td>
                    <td>:</td>
                    <td><input type="number" name="stokB" value="<?= $row['stok']; ?>"></td>
                </tr>

            </table>
            <input class="w3-button w3-blue w3-margin-top" type="submit" name="edit" value="Edit">
        </form>


    </center>
    <div class="w3-round w3-teal w3-padding-16 w3-center">Masukan data dengan benar,kemudian click tombol save</div>