<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Siswa Baru</title>
</head>
<body>
	<header>
		<h2>Tambah Data Siswa</h2>
	</header>

	<form action="proses-simpan.php" method="post" enctype="multipart/form-data">
		<table width="25%" border="0"  cellpadding="8">
			<tr> 
				<td>NIS</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
				</td>
			</tr>	
			<tr> 
				<td>Telepon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr> 
				<td>Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan">
		<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>