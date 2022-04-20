<?php

    include_once("koneksidb.php");
    $telp = "089650987400";
    $sql = "UPDATE sp SET Telepon='$telp';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }