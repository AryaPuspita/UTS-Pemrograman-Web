<?php
    
    include_once("Koneksidb.php");
    $alamat = "JL. SEGARA MADU LINGK. KELAN ABIAN";
    $sql = "DELETE FROM sp WHERE Kode='$alamat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }