<?php 

include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM absensi WHERE id = '$id'";

mysqli_query($koneksi, $query);

header('Location: indexadmin.php');

 ?>