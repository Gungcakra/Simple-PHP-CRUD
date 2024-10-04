<?php
require "function.php";

$id = $_GET["id"];

if(hapus($id)> 0){
    echo "<script>alert('data telah dihapus')</script>";
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('data gagal dihapus')</script>";
    
}


?>