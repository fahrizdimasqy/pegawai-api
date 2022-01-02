<?php
	include 'koneksi.php';
	$nip = $_GET['nip'];
	mysqli_query($koneksi, "delete from tb_pegawai 
	where NIP ='$nip' ");
	header("location:index.php");
?>