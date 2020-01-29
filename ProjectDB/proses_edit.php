<?php 

	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$ket = $_POST['ket'];

	$hasil = mysqli_query($koneksi, "UPDATE absensi SET id='$id', nama='$nama', keterangan='$ket' WHERE id='$id'");

	header('Location: indexadmin.php');
?>