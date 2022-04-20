<?php
    if(isset($_POST['txKODE'])){
    include_once ("Koneksidb.php");
    $kode =$_POST['txKODE'];
    $nama =$_POST['txNAMA'];
    $alamat = $_POST["txALAMAT"];
    $kota = $_POST["txKOTA"];
    $prov = $_POST["txPROV"];
    $telp = $_POST["txTELP"];

    $sql = "INSERT INTO sp(Kode,Nama,Alamat,Kota,Provinsi,Telepon) 
    Values('$kode','$nama','$alamat','$kota','$prov','$telp');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
}else{
    header("location : insertdata2.php");
}