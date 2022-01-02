<?php
	$koneksi = mysqli_connect("localhost", "root","", "db_kepegawaian");
	if (mysqli_connect_errno()) {
		# code...
		echo "gagal koneksi" . mysqli_connect_error();
	}
?>