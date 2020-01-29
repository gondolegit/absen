<?php 

	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$ket = $_POST['ket'];

	$hasil = mysqli_query($koneksi, "UPDATE absensi SET id='$id', nama='$nama', keterangan='$ket'");
	// if(!$hasil){
	// 	header('Location: logout.php');
	// 	exit();
	// }else{
	// 	header('Location: indexadmin.php');
	// 	exit();
	// }