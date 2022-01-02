<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data siswa</title>
</head>
<body>
		<h2>Halaman Tambah Data </h2>
	
		<form method="POST" action="aksi_tambah.php">
			<table>
			<tr>
				<td><label>NIP</label></td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td><label>Nama Pegawai</label></td>
				<td><input type="text" name="nama_pegawai"></td>
			</tr>
			<tr>
				<td><label>Golongan</label></td>
				<td><input type="text" name="golongan"></td>
			</tr>
			<tr>
			<td><label>TMT</label></td>
				<td><input type="date" name="tmt"></td>
			</tr>
			<tr>
				<td><label>Jabatan</label></td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			
			<tr>
				<td><input type="submit" value="simpan"></td>
				<td><a href="index.php">kembali</a></td>
			</tr>
		</table>
	</form>

</body>
</html>