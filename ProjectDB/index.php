<?php 

include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $ket = $_POST['ket'];

    $query = "INSERT INTO absensi (nama,keterangan) VALUES ('$nama','$ket')";

    if (mysqli_query($koneksi,$query)) {
        header('Location: beranda.php');
    }

    else{
        echo "Gagal";
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Absensi | XI TEL 12</title>
    <link rel="icon" href="calendar3.png">
    <style>
    
        *{
            font-family: sans-serif;
            margin: 0%;
            padding: 0%;
        }
 
        body{
            background-color: pink;
        }

        p{
            color: white;
        }

        .main h1{
            color: white;
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
            width: 600px;
            height: 550px;
            background-color: rgb(138, 98, 134);
            margin-left:360px;
        }

        img{
            border-radius: 50px;
            background-color: white;
        }

        .form{

            color: white;
            font-family: sans-serif;;
            width: 370px;
            height: 400px;
            background-color: brown;
            margin-left: 50px;
            font-size: 20px;
            padding-top: 30px;
            padding-left: 130px;   
            

        }

        .form{
            padding-bottom: 20px;
        }


    </style>
</head>
<body>

    <div class="header">
        <br>
        <center><h1>Absensi | Absen XI TEL 12</h1></center><br><hr><hr>
        <center><ul>
        <li><a href="beranda.php">Home</a></li>
        <li><a href="Login.php">Logout</a></li>
        </ul></center>
    </div>
    
    <div class="main"><br>
        <center><img src="calendar3.png" width="20%" height="20%"></center><br>
        <center><h1>Isi Absen Mu Sekarang</h1></center><br>

            <div class="form">

                <form action="index.php" method="post">
                    <table>
                    <tr>
                        <td>Nama  </td>
                        
                        <td><input type="text" name="nama"></td>
                    </tr>

                    <tr>
                        
                        <td>Tanggal </td>
                        <td><?php $tanggal = mktime(date("m"),date("d"),date("Y"));echo date("d-M-Y", $tanggal);?></td>

                    </tr>

                    <tr>

                        <td>Keterangan</td>

                    </tr>

                    <tr>
                        <td><input type="radio" name="ket" value="masuk">Masuk</td>  
                        <td><input type="radio" name="ket" value="sakit">Sakit </td>
                        <td><input type="radio" name="ket" value="izin">Izin</td> 
                        <td><input type="radio" name="ket" value="alpha">Alpha</td>
                    </tr>

                     <td><input type="submit" name="simpan" value="Simpan"></td>
                        <td><input type="reset" name="hapus" value="Hapus"></td>

                    </table>
                </form>
            </div>
                
    </div>
</body>
</html>