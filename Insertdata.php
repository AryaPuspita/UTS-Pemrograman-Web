<?php
    include_once ("koneksidb.php");
    $kode ="SP01";
    $nama = "PT. Setia";
    $alamat = "Jl. Uluwatu";
    $kota = "Denpasar";
    $prov = "Bali";
    $telp = "123";

    $sql = "INSERT INTO sp(Kode,Nama,Alamat,Kota,Provinsi,Telepon) 
    Values('$kode','$nama','$alamat','$kota','$prov','$telp');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
