<?php
$con = mysqli_connect("localhost", "root", "", "simplecrud");
require "function.php";

$id = $_GET["id"];

$data = query("SELECT * FROM dataisi WHERE id = $id")[0];
    
if(isset($_POST["submit"])){
    


    //cek apakah data berhasil di tambah/tidak
  if(ubahdata($_POST)>0){
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='index.php';
</script>";
}else{
    echo "<script>
        alert('Data Gagal Diubah');
        window.location.href='tambahdata.php';
    </script>";
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud
    </title>
</head>
<body>
    <h1>Ubah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="hidden" name="id" value="<?= $data["id"] ?>">
        <input type="name" name="nama"  placeholder="Masukan Nama" autocomplete="off"  value="<?= $data["nama"] ?>">
        <br>
        <label for="email">Email</label>
        <input type="name" name="email"  placeholder="Masukan email" autocomplete="off"  value="<?= $data["email"] ?>">
        <br>
        <label for="nomor">Nomor</label>
        <input type="name" name="nomor"  placeholder="Masukan Nomor" autocomplete="off"  value="<?= $data["nomor"] ?>">
        <br>
        

        <input type="submit" name="submit" value="Submit">
    </form>

    
</body>
</html>