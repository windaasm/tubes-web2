<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body background="./imagess/nyoba.jpg">
    <div class="w3-margin-top w3-purple w3-padding-16 w3-round-xxlarge w3-center w3-margin-bottom">Menampilkan Seluruh Isi Tabel Penjualan</div>
    <table class="w3-table-all">
        <thead>
            <tr class="w3-aqua">
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Nama Pembeli</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Kode pos</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM penjualan";
        $result = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($result)) {
            # code...

        ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['kodebrg']; ?></td>
                <td><?= $data['jumlah']; ?></td>
                <td><?= $data['namapembeli']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['kota']; ?></td>
                <td><?= $data['kodepos']; ?></td>
                <td><?= $data['telp']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><a href="index.php?p=proses_delete&kdd=<?= $data['kodebrg']; ?>" class="w3-btn w3-red">Delete</a></td>
            </tr>
        <?php } ?>

    </table>