<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Pendataan Siswa dengan Fitur Upload Foto</title>
</head>

<body>
	<h2>Data Siswa</h2>
	<p>
        <a href="form-simpan.php">[+] Tambah Baru</a>
	</p>
	<table width='100%' border=1>
		<tr>
            <td><strong>Foto</strong></td>
            <td><strong>NIS</strong></td>
			<td><strong>Nama</strong></td>
            <td><strong>Jenis Kelamin</strong></td>
            <td><strong>Telepon</strong></td>
            <td><strong>Alamat</strong></td>
			<td colspan="2"><strong>Aksi</strong></td>
		</tr>
		<?php
        require_once("config.php");
        // Buat query untuk menampilkan semua data siswa
        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute(); // Eksekusi querynya

		while ($data = $sql->fetch()) {
			echo "<tr>";
            echo "<td><img src='images/".$data['foto']." 'width = '100' height='100'></td>";
            echo "<td>".$data['nis']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['telp']."</td>";	
            echo "<td>".$data['alamat']."</td>";
			echo "<td><a href='form-ubah.php?id=".$data['id']."'>Ubah</a></td>";
            echo "<td><a href='proses-hapus.php?id=".$data['id']."'>Hapus</a></td>";
		}
		?>
	</table>
</body>
</html>