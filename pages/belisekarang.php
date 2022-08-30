<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form action="index.php?p=savebeli" method=post>
<body background="./imagess/nyoba.jpg">
<center>
<table border=0>
<?php
require ("koneksi.php");
$kodebrg=$_GET['kodebrg'];
echo "<center><img src='./imagess/$kodebrg.jpeg' width=40% height=50%></center>";
echo "<br>";
$sql="select * from barang where kodebrg='$kodebrg' ";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
do
{
list($kodebrg,$namabarang,$harga,$stok)=$row;
echo "<tr><td width=150>Kode Barang<td width=100><input name=kodebrg value='$kodebrg'
readonly size=10>";
echo "<tr><td>Nama Barang<td><input name=namabarang value='$namabarang' size=30>";
echo "<tr><td>Harga<td><input name=harga value='$harga' size=10>";
echo "<tr><td>Stok<td><input name=stok value='$stok' size=5>";
echo "<tr><td>Jumlah Beli<td><select name=jumlah>";
for($i=1;$i<=$stok;$i++)
echo "<option>$i";
echo "<tr><td>Nama Pembeli<td><input name=namapembeli size=30>";
echo "<tr><td>Alamat<td><input name=alamat size=50>";
echo "<tr><td>Kota<td><input name=kota size=20>";
echo "<tr><td>KodePos<td><input name=kodepos size=5>";
echo "<tr><td>Telp<td><input name=telp size=20>";
echo "<tr><td>Email<td><input name=email size=30>";
}
while($row=mysqli_fetch_row($hasil));
?>
</table>
<hr width=400>
<button class="w3-btn w3-round-xxlarge w3-red" >Save Pembelian</button>
<a class="w3-btn w3-round-xxlarge w3-red" href="index.php">Kembali ke Toko</a>