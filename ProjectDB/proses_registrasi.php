<?php

    include 'koneksi.php';

    // if (isset($_POST['submit'])){

        $user = $_POST['username'];
        $pass = $_POST['password'];
        $nama = $_POST['namalengkap'];
        $nis  = $_POST['nis'];
        $tempat = $_POST['tempat_lahir'];
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telepon'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];


        $query = "INSERT INTO absen (id	username,password,nama_lengkap,nis,tempat_lahir,tanggal,bulan,tahun,alamat,no_telp,jk,agama) VALUES ('$user', '$pass', '$nama', '$nis', '$tempat', '$tanggal', '$bulan', '$tahun', '$alamat', '$telp', '$jk' , '$agama')";
        /*$cek_register =*/ mysqli_query($koneksi, $query);

    //      if ($cek_register) {

    //         echo "Berhasil Terdaftar";
            
    //      }

    //      else {
    //          echo "Gagal Terdaftar :(";
    //      }

    // }
    // else {
    //     echo "koneksi gagal :(";
    // }


?>