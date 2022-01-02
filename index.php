<!DOCTYPE html>
<html>
<head>
	<title>Kepegawaian Tetap</title>
</head>
<body>
	<a href="tambah.php">tambah data pegawai</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>Nama Pegawai</th>
			<th>Golongan</th>
			<th>TMT</th>
			<th>Jabatan</th>
			<th>AKSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$query = mysqli_query($koneksi,"SELECT * FROM tb_pegawai");
		while ($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['NIP']; ?></td>
				<td><?php echo $data['nama_pegawai']; ?></td>
				<td><?php echo $data['golongan']; ?></td>
				<td><?php echo $data['tmt']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td>
					<a href="edit.php?nip=<?=$data['NIP']?>">EDIT</a>
					<a href="hapus.php?nip=<?=$data['NIP']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>