<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body background="./imagess/nyoba.jpg">

<div class="w3-margin-top w3-purple w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Menampilkan Seluruh Isi Tabel Barang</div>
<table class="w3-table-all">
<thead>
  <tr class="w3-aqua">
    <th>NO</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Harga Barang</th>
    <th>Stok</th>
    <th>Action</th>
  </tr>
</thead>
<?php 
    include 'koneksi.php';
    $no=1;
    $sql="SELECT * FROM barang";
    $result = mysqli_query($conn,$sql);

    while ($data= mysqli_fetch_array($result)) {
        # code...
?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['kodebrg']; ?></td>
        <td><?= $data['namabarang']; ?></td>
        <td><?= $data['harga']; ?></td>
        <td><?= $data['stok']; ?></td>
        <td>
            <a href="index.php?p=form_edit&k=<?= $data['kodebrg']; ?>" class="w3-btn w3-blue">Edit</a>
            <a href="index.php?p=proses_hapus&KD=<?= $data['kodebrg']; ?>" class="w3-btn w3-red">Delete</a>
        </td>
    </tr>
<?php } ?>

</table>