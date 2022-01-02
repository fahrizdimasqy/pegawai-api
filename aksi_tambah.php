<?php
	include 'koneksi.php';
	$nip = $_POST['nip'];
	$nama = $_POST['nama_pegawai'];
	$golongan = $_POST['golongan'];
	$tmt = $_POST['tmt'];
	$jabatan = $_POST['jabatan'];

$queri = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE NIP ='$nip'");
	$cek = mysqli_num_rows($queri);
	if ($cek >0) {
		?>
			<script type="text/javascript">
				window.alert("NIP tidak boleh sama");
				window.location = "tambah.php";
		</script>
			</script>
			<?php
	}else{

	$query = mysqli_query($koneksi, "insert into tb_pegawai values('$nip','$nama','$golongan','$tmt','$jabatan')");
	header("location:index.php");
	if ($query) {
		?>
		<script type="text/javascript">
			window.alert("DATA BERHASIL DISMPAN!");
			window.location = "index.php";
		</script>
		<?php
	}

}
?>