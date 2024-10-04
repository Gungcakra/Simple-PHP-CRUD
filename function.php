<?php

$con = mysqli_connect("localhost", "root","", "simplecrud" );


//Ambil data dari table database dengan wadah ROWS
function query($query){
    global $con;

    $result = mysqli_query($con, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

//Function Hapus Data
function hapus($id){
    global $con;

    mysqli_query($con,"DELETE from dataisi WHERE id = $id");
    return mysqli_affected_rows($con);

}

//Function Ubah Data
function ubahdata($data){
    global $con;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $nomor = htmlspecialchars($data["nomor"]);

    $query = "UPDATE dataisi SET nama = '$nama', email = '$email', nomor = $nomor WHERE id = $id";
    mysqli_query($con,$query);
    return mysqli_affected_rows($con);
}





?>