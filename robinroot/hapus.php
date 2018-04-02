<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal Bosku: " . $koneksi->connect_error);
}else{
	echo "Koneksi sukses!";
}



$query = "delete from robinroot where NIM = " . 
        $_GET["NIM"];
        
//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data dengan NIM " . $_GET["NIM"] . 
    " Your Data Has Been Deleted, View Here " . 
    '<a href="main.php">here</a>';
}else {
    echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>