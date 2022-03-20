<?php

include("config.php");

if(isset($_POST['daftar'])){

    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];

    $sql = "INSERT INTO elektronik (jenis, merk, warna) VALUE ('$jenis', '$merk', '$warna')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php?status=sukses');
    } else {
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>