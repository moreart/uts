<h2>Formulir Edit Data Mahasiswa</h2>
<hr>
<form action="update.php" method="post">

<?php
	include "koneksi.php";
	$koneksiObj = new Koneksi();
	$koneksi = $koneksiObj->ambilKoneksi();

	if($koneksi->connect_error){
		die("Koneksi Gagal Bosku : ".$koneksi->connect_error);
	}else{
		
	}

	$qry = "select * from robinroot where NIM='".$_GET["NIM"]."'";
	$data = $koneksi->query($qry);
	if($data->num_rows <= 0) {
		echo "Isi Data Sesuai Prosedur yah";
	} else {
		while ($hasil = $data->fetch_assoc()) {
			global $nama;
			global $jurusan;
			$nama = $hasil["NAMA"];
			$jurusan = $hasil["JURUSAN"];
		}
	}
?>


<table>
<tr>
	<td>NIM </td>
	<td>: <input type="text" name="NIM" readonly="true"
		value=<?php echo $_GET["NIM"]; ?>></td>
</tr>
<tr>
	<td>NAMA </td>
	<td>: <input type="text" name="NAMA"
		value = <?php echo $nama; ?>></td>
</tr>
<tr>
	<td>JURUSAN </td>
	<td>: <input type="text" name="JURUSAN"
		value = <?php echo $jurusan; ?>></td>
</tr>
<tr>
	<td><input type="submit" value="Save"></td>
</tr>
</table>
</form>