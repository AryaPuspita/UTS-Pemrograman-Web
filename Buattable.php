<?php

include_once("koneksidb.php");
$sql = "CREATE TABLE sp(
    Kode Varchar(6) PRIMARY KEY,
    Nama Varchar(50),
    Alamat Varchar(50),
    Kota Varchar(20),
    Provinsi Varchar(20),
    Telepon Varchar(14)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}