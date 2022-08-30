<?php
if (isset($_POST['save'])) {
    $kode = $_POST['kodeB'];
    $nama = $_POST['namaB'];
    $harga = $_POST['hargaB'];
    $stok = $_POST['stokB'];

if(($kode=='') || ($nama=='') || ($harga=='') || ($stok==''))
{
echo" 
    <script>
            alert('Maaf data belum diisi');
            document.location.href='index.php?p=insert';
    </script>";
exit;
}else {
    include 'koneksi.php';
    
    $kode = $_POST['kodeB'];
    $nama = $_POST['namaB'];
    $harga = $_POST['hargaB'];
    $stok = $_POST['stokB'];
    $sql = "INSERT INTO barang VALUES('$kode','$nama','$harga','$stok')";
    mysqli_query($conn,$sql);
    echo" 
    <script>
            alert('Data Berhasil di tambahkan');
    </script>";
}
}
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body background="./imagess/nyoba.jpg">
    <div class="w3-margin-top w3-purple w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Menambahkan data barang</div>
    <center>
    <form action="" method="post">
        <table border=0>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kodeB"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="namaB"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="hargaB"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stokB"></td>
            </tr>
        </table>
        <input class="w3-button w3-aqua w3-margin-top" type="submit" name="save" value="Save">
    </form>
    </center>
    <div class="w3-round w3-purple w3-padding-16 w3-center">Masukan data dengan benar, kemudian click tombol save</div>