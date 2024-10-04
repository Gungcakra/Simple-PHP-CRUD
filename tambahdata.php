<?php
$con = mysqli_connect("localhost", "root", "", "simplecrud");
if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomor = $_POST["nomor"];

    $query = "INSERT INTO dataisi(nama,email,nomor) VALUES('$nama','$email',$nomor)";
    mysqli_query($con, $query);

    //cek apakah data berhasil di tambah/tidak
  if(($_POST)>0){
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    window.location.href='index.php';
</script>";
}else{
    echo "<script>
        alert('Data Gagal Ditambahkan');
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
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="name" name="nama"  placeholder="Masukan Nama" autocomplete="off">
        <br>
        <label for="email">Email</label>
        <input type="name" name="email"  placeholder="Masukan email" autocomplete="off">
        <br>
        <label for="nomor">Nomor</label>
        <input type="name" name="nomor"  placeholder="Masukan Nomor" autocomplete="off">
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    
</body>
</html>