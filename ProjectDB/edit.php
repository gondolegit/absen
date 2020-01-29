 <?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$id'");



while($d = mysqli_fetch_array($data)){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Control Admin | Edit</title>
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
        <center><h1>Control Admin | Edit</h1></center><br><hr><hr>
        <center><ul>
        <li><a href="indexadmin.php">Home</a></li>
        <li><a href="Logout.php">Logout</a></li>
        </ul></center>
    </div>
    
    <div class="main"><br>
        <center><img src="calendar3.png" width="20%" height="20%"></center><br>

            <div class="form">

                <form action="proses_edit.php" method="post">
                    <table>
                
                    <tr>
 <!--                    	<td>Nomor absen</td>
                    	<td><input type="text" name="id"></td> -->
                    </tr>
                    <tr>
                        <td>Nama  </td>
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <td><input type="text" name="nama" value="<?= $d['nama']; ?>"></td>
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

                     <td><input type="submit" name="edit" value="Simpan"></td>
                        <td><input type="reset" name="hapus" value="Hapus"></td>

                    </table>
                </form>
            </div>
                
    </div>
<?php 
}

 ?>
</body>
</html>