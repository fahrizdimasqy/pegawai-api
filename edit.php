<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data siswa</title>
</head>
<body>
		<h2>Halaman Tambah Data </h2>
	<?php
	include 'koneksi.php';
	$nip = $_GET['nip'];

	$sql = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE NIP = '$nip'");

	$data = mysqli_fetch_array($sql);
	?>
		<form method="POST" action="">
			<table>
			<tr>
				<td><label>NIP</label></td>
				<td><input type="text" name="nip" value="<?=$data['NIP']?>"></td>
			</tr>
			<tr>
				<td><label>Nama Pegawai</label></td>
				<td><input type="text" name="nama_pegawai" value="<?=$data['nama_pegawai']?>"></td>
			</tr>
			<tr>
				<td><label>Golongan</label></td>
				<td><input type="text" name="golongan" value="<?=$data['golongan']?>"></td>
			</tr>
			<tr>
			<td><label>TMT</label></td>
				<td><input type="date" name="tmt" value="<?=$data['tmt']?>"></td>
			</tr>
			<tr>
				<td><label>Jabatan</label></td>
				<td><input type="text" name="jabatan" value="<?=$data['jabatan']?>"></td>
			</tr>
			
			<tr>
				<td><input type="submit" value="simpan" name="simpan"></td>
				<td><a href="index.php">kembali</a></td>
			</tr>
		</table>
			
	</form>
<?php
if (isset($_POST['simpan'])) {
	// PRIMARY
	$nip = $_POST['nip'];
	$nama = $_POST['nama_pegawai'];
	$golongan = $_POST['golongan'];
	$tmt = $_POST['tmt'];
	$jabatan = $_POST['jabatan'];


	$queri = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE NIP ='$nip'");
	$cek = mysqli_num_rows($queri);

	

		$query = mysqli_query($koneksi,"UPDATE tb_pegawai SET NIP = '$nip', nama_pegawai = '$nama', golongan = '$golongan', tmt = '$tmt', jabatan = '$jabatan' WHERE NIP = '$nip' ");
	if ($query) {
		?>
		<script type="text/javascript">
			window.alert("DATA BERHASIL DIUBAH!");
			window.location = "index.php";
		</script>
		<?php
	 
	}
}

?>
</body>
</html>