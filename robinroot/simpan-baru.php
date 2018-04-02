<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi Gagal Bosku : " . $koneksi->connect_error);
} else {
    echo "Koneksi sukses!";
}


$query = "INSERT INTO robinroot(NIM,NAMA,JURUSAN) VALUES(".$_POST["NIM"].",'".$_POST["NAMA"]."','".$_POST["JURUSAN"]."') ";

if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["NAMA"].
    " Your Data Has Been Saved. Data can be view in ".
    '<a href="main.php">here</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

$koneksi->close();
?>