<?php
require("koneksi.php");
if (isset($_POST['carikd'])) {
    $cari = $_POST['cari_kode'];
    header('Location:index.php?p=form_edit&k=' . $cari);
}

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body background="./imagess/nyoba.jpg">

    <div class="w3-margin-top w3-purple w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Edit Data</div>
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
            <input class="w3-button w3-aqua" type="submit" value="Edit" name="carikd">
        </form>

        <hr>
    </center>
    <br>
    <div class="w3-round w3-purple w3-padding-16 w3-center">Masukan kode barang yang akan di Edit, kemudian Click Edit</div>