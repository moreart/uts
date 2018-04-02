<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}



$query = "update robinroot " .
        "set NAMA = '" . $_POST["NAMA"] . "'," .
        "   JURUSAN = '" . $_POST["JURUSAN"] . "' " . 
        "where NIM = " . $_POST["NIM"];

//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data " . $_POST["NAMA"] . 
    " Has Been Change. Data can be view in " . 
    '<a href="main.php">here</a>';
}else {
        echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>