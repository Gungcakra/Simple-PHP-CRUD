<?php
require "function.php";

$isi = query("SELECT * FROM dataisi");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud</title>
</head>
<body>
    <h1>Simple Crud</h1>

    <button ><a href="tambahdata.php">Tambah Data</a></button>
    <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th width="100">Nama</th>
            <th width="100">Email</th>
            <th width="100">Nomor</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i= 1  ?>
        <?php foreach($isi as $dt):  ?>
       <tr>
        <td><?= $i?></td>
        <td><?= $dt["nama"] ?></td>
        <td><?= $dt["email"] ?></td>
        <td><?= $dt["nomor"] ?></td>
        <td><a href="hapus.php?id=<?php echo $dt["id"]  ?> " onclick="return confirm('yakin ingin mennghapus?')">Hapus</a></td>
        <td><a href="ubah.php?id=<?php echo $dt["id"]  ?> ">Ubah</a></td>
       </tr>
       <?php $i++  ?>
       <?php endforeach; ?>
    </table>
</body>
</html>