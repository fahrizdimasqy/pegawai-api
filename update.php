<?php
	include 'koneksi.php';

	$id = $_POST['id_siswa'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama_siswa'];
	$jenis = $_POST['jenis_kelamin'];
	$tempat = $_POST['tempat_lahir'];
	$tanggal = $_POST['tanggal_lahir'];
	$id_kelas = $_POST['id_kelas'];
	$id_jurusan = $_POST['id_jurusan'];
	

	 mysqli_query($koneksi, "update tb_siswa set nis = '$nis', nama_siswa = '$nama', jenis_kelamin = '$jenis', tempat_lahir = '$tempat', tanggal = '$tanggal', id_kelas = '$id_kelas', id_jurusan = '$id_jurusan', where id_siswa = '$id' ");
	header("location:index.php");
?>	