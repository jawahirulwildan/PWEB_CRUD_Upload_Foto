<?php
// Include the database connection file
require_once("config.php");

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru= date('dmYHis').$foto;

$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp,$path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$sql = $pdo->prepare("INSERT INTO siswa(nis, nama, jenis_kelamin, telp, alamat, foto) VALUES (:nis,:nama, :jk,:telp, :alamat, :foto)");
	$sql->bindParam(':nis', $nis);
	$sql->bindParam(':nama', $nama);
	$sql->bindParam(':jk', $jenisKelamin);
	$sql->bindParam(':telp', $telp);
	$sql->bindParam(':alamat', $alamat);
	$sql->bindParam(':foto', $fotobaru);
	$sql->execute(); // Eksekusi query insert
	
	if($sql){// Cek ilka proses simpan ke database sukses atau tidak
		// jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	} else{
		// jika Gagal, lakukan
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}
else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>